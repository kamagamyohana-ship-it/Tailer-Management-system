<?php
$usersFile = __DIR__ . '/users.json';
$users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];
$users = is_array($users) ? $users : [];
$email = 'sabato@gial.com';
$exists = false;
foreach ($users as $user) {
    if (isset($user['email']) && strtolower($user['email']) === strtolower($email)) {
        $exists = true;
        break;
    }
}
if ($exists) {
    echo "DUPLICATE_FOUND\n";
} else {
    echo "NOT_FOUND\n";
}
?>