<?php
$page_title = 'Login';
$active = 'login';
include 'includes/header.php';

$usersFile = __DIR__ . '/users.json';
$message = '';
$messageType = 'small-note';
$remember = !empty($_POST['remember_me'] ?? false);

if (isset($_SESSION['user'])) {
    $redirect = ($_SESSION['user']['role'] ?? 'user') === 'admin' ? '/admin/dashboard.php' : '/user/dashboard.php';
    header('Location: ' . $redirect);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        $message = 'Tafadhali weka email yako na neno la siri.';
    } else {
        $users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];
        $users = is_array($users) ? $users : [];

        $matchedUser = null;
        foreach ($users as $user) {
            if (isset($user['email']) && strtolower($user['email']) === strtolower($email) && password_verify($password, $user['password'] ?? '')) {
                $matchedUser = $user;
                break;
            }
        }

        if ($matchedUser) {
            $_SESSION['user'] = [
                'full_name' => $matchedUser['full_name'] ?? '',
                'email' => $matchedUser['email'],
                'role' => $matchedUser['role'] ?? 'user',
            ];

            if (!empty($_POST['remember_me'])) {
                $cookieValue = base64_encode(json_encode([
                    'email' => $matchedUser['email'],
                    'token' => $matchedUser['password'] ?? '',
                ]));
                setcookie('kushona_remember', $cookieValue, time() + 60 * 60 * 24 * 30, '/');
            } else {
                setcookie('kushona_remember', '', time() - 3600, '/');
            }

            $redirect = ($_SESSION['user']['role'] === 'admin') ? '/admin/dashboard.php' : '/user/dashboard.php';
            header('Location: ' . $redirect);
            exit;
        }

        $message = 'Email au neno la siri si sahihi. Tumia email yako na neno la siri ulilosajiliwa.';
    }
}
?>
<main class="container section">
    <section class="grid-2">
        <article class="card">
            <h1>Login</h1>
            <p class="lead">Ingia kwa kutumia email yako na neno la siri ulilosajiliwa.</p>
            <p class="small-note">Tumia email halali na neno la siri moja sawa lililotumika wakati wa usajili.</p>
            <p class="<?php echo $messageType; ?>"><?php echo htmlspecialchars($message); ?></p>
        </article>
        <article class="card">
            <h3>Sign in</h3>
            <form class="form-grid" method="post" action="/login.php">
                <label class="label">Email<input class="input" type="email" name="email" placeholder="you@example.com"
                        required></label>
                <label class="label">Password<input class="input" type="password" name="password" placeholder="••••••••"
                        required></label>
                <label class="label" style="font-weight: 500;"><input type="checkbox" name="remember_me" value="1">
                    Nisikumbushe kwenye kifaa hiki</label>
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
        </article>
    </section>
</main>
<?php include 'includes/footer.php'; ?>