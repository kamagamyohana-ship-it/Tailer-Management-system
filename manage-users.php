<?php
$page_title = 'Manage Users';
$active = 'admin';
include 'includes/header.php';

if (!isset($_SESSION['user']) || ($_SESSION['user']['role'] ?? 'user') !== 'admin') {
    header('Location: /login.php');
    exit;
}

$usersFile = __DIR__ . '/users.json';
$users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];
$users = is_array($users) ? $users : [];
?>
<main class="container section">
    <section class="card">
        <h1>Manage Users</h1>
        <p class="lead">Admin area for user management and role control.</p>
        <p class="small-note">Kila mtumiaji anayesajiliwa sasa anaonekana hapa.</p>
    </section>
    <section class="card">
        <?php if (empty($users)): ?>
            <p class="small-note">Hakuna mtumiaji aliyesajiliwa bado.</p>
        <?php else: ?>
            <ul class="list">
                <?php foreach ($users as $user): ?>
                    <li>
                        <strong><?php echo htmlspecialchars($user['full_name'] ?? 'Unknown'); ?></strong>
                        — <?php echo htmlspecialchars($user['email'] ?? ''); ?>
                        (role: <?php echo htmlspecialchars($user['role'] ?? 'user'); ?>,
                        registered: <?php echo htmlspecialchars($user['created_at'] ?? '-'); ?>)
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>
</main>
<?php include 'includes/footer.php'; ?>