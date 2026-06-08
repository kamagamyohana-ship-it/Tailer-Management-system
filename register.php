<?php
$page_title = 'Register';
$active = 'register';
include 'includes/header.php';

$usersFile = __DIR__ . '/users.json';
$message = '';
$messageType = 'small-note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';
    $role = in_array($_POST['role'] ?? 'user', ['user', 'admin'], true) ? $_POST['role'] : 'user';

    if ($fullName === '' || $email === '' || $password === '' || $confirmPassword === '') {
        $message = 'Tafadhali jaza sehemu zote.';
        $messageType = 'small-note';
    } elseif (!preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Anwani ya barua pepe si sahihi. Tumia email halali.';
        $messageType = 'small-note';
    } elseif ($password !== $confirmPassword) {
        $message = 'Nenosiri halifanani na uthibitisho wake. Tumia neno la siri moja sawa.';
        $messageType = 'small-note';
    } else {
        $users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];
        $users = is_array($users) ? $users : [];

        $exists = false;
        foreach ($users as $user) {
            if (isset($user['email']) && strtolower($user['email']) === strtolower($email)) {
                $exists = true;
                break;
            }
        }

        if ($exists) {
            $message = 'Akaunti hiyo tayari ipo. Tumia barua pepe nyingine.';
            $messageType = 'small-note';
        } else {
            $users[] = [
                'full_name' => $fullName,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'role' => $role,
                'created_at' => date('Y-m-d H:i:s'),
            ];

            file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));
            $message = 'Usajili umefanikiwa. Mtumiaji amesajiliwa na anaweza kuonekana kwenye admin.';
            $messageType = 'small-note';
        }
    }
}
?>
<main class="container section">
    <section class="grid-2">
        <article class="card">
            <h1>Create an account</h1>
            <p class="lead">Register to start using the learner dashboard, save progress, and interact with sewing
                content.</p>
            <p class="<?php echo $messageType; ?>"><?php echo htmlspecialchars($message); ?></p>
        </article>
        <article class="card">
            <h3>Register</h3>
            <form class="form-grid" method="post" action="/register.php">
                <label class="label">Full name<input class="input" type="text" name="full_name" placeholder="Jane Doe"
                        required></label>
                <label class="label">Email<input class="input" type="email" name="email" placeholder="jane@example.com"
                        required></label>
                <label class="label">Account type<select class="input" name="role">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select></label>
                <label class="label">Password<input class="input" type="password" name="password"
                        placeholder="Create a password" required></label>
                <label class="label">Confirm password<input class="input" type="password" name="confirm_password"
                        id="confirm_password" placeholder="Repeat password" required></label>
                <p id="password_match_note" class="small-note">Andika tena neno la siri ili liwe sawa na la kwanza.</p>
                <button class="btn btn-primary" type="submit">Register now</button>
                <script>
                    const passwordInput = document.querySelector('input[name="password"]');
                    const confirmInput = document.getElementById('confirm_password');
                    const note = document.getElementById('password_match_note');

                    function updateNote() {
                        if (!passwordInput || !confirmInput || !note) return;
                        if (confirmInput.value === '') {
                            note.textContent = 'Andika tena neno la siri ili liwe sawa na la kwanza.';
                            note.style.color = '#475569';
                            return;
                        }
                        if (passwordInput.value === confirmInput.value) {
                            note.textContent = 'Neno la siri limefanana.';
                            note.style.color = '#047857';
                        } else {
                            note.textContent = 'Neno la siri halifanani. Andika sawa sawa.';
                            note.style.color = '#b91c1c';
                        }
                    }

                    passwordInput.addEventListener('input', updateNote);
                    confirmInput.addEventListener('input', updateNote);
                </script>
            </form>
        </article>
    </section>
</main>
<?php include 'includes/footer.php'; ?>