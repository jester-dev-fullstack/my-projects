<?php


use Core\App;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];

$db = App::resolve(Database::class);

$user = $db->query(
    'SELECT * FROM users WHERE email = :email',
    [':email' => $email]
)->find();

if (! $user) {
    return view('auth/login.view.php', [
        'errors' => [
            'email' => 'Email is not registered.'
        ],
        'email' => $email
    ]);
}

if (! password_verify($password, $user['password'])) {
    return view('auth/login.view.php', [
        'errors' => [
            'password' => 'Invalid password.'
        ],
        'email' => $email
    ]);
}

login($user);

header("Location: /dashboard");
exit();
