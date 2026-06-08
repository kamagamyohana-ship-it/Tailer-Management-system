<?php
session_start();

function kushona_auto_login_from_cookie()
{
    if (isset($_SESSION['user'])) {
        return;
    }

    $cookieName = 'kushona_remember';
    if (!isset($_COOKIE[$cookieName])) {
        return;
    }

    $data = json_decode(base64_decode($_COOKIE[$cookieName], true), true);
    if (!is_array($data) || empty($data['email']) || empty($data['token'])) {
        return;
    }

    $usersFile = __DIR__ . '/users.json';
    $users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];
    $users = is_array($users) ? $users : [];

    foreach ($users as $user) {
        if (isset($user['email']) && strtolower($user['email']) === strtolower($data['email']) && ($user['password'] ?? '') === $data['token']) {
            $_SESSION['user'] = [
                'full_name' => $user['full_name'] ?? '',
                'email' => $user['email'],
                'role' => $user['role'] ?? 'user',
            ];
            break;
        }
    }
}

kushona_auto_login_from_cookie();

function nav_item($label, $href, $active = false)
{
    $class = $active ? 'nav-link active' : 'nav-link';
    return '<li class="nav-item"><a class="' . $class . '" href="' . $href . '">' . $label . '</a></li>';
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title ?? 'Kushona System'; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles.css">
</head>

<body>
    <header class="topbar">
        <div class="container nav-wrap">
            <a class="brand" href="/index.php">Kushona</a>
            <nav>
                <ul class="nav-list">
                    <?php echo nav_item('Home', '/index.php', $active === 'home'); ?>
                    <?php echo nav_item('About', '/about.php', $active === 'about'); ?>
                    <?php echo nav_item('Contact', '/contact.php', $active === 'contact'); ?>
                    <?php echo nav_item('Login', '/login.php', $active === 'login'); ?>
                    <?php echo nav_item('Register', '/register.php', $active === 'register'); ?>
                    <?php if (isset($_SESSION['user'])): ?>
                        <?php echo nav_item('User Dashboard', '/dashboard.php', $active === 'user'); ?>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['user']) && ($_SESSION['user']['role'] ?? '') === 'admin'): ?>
                        <?php echo nav_item('Admin Dashboard', '/admin/dashboard.php', $active === 'admin'); ?>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['user'])): ?>
                        <?php echo nav_item('Logout', '/logout.php', false); ?>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>