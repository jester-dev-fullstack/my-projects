<?php

use Core\App;
use Core\Validator;
use Core\Database;

$email = $_POST['email'] ?? '';

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = "Please provide a valid email address.";
}

if (!empty($errors)) {
    return view('auth/forgot.view.php', [
        'errors' => $errors,
        'email' => $email
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query(
    'SELECT * FROM users WHERE email = :email',
    [':email' => $email]
)->find();

if (!$user) {
    $errors['email'] = "No user found with that email address.";
    return view('auth/forgot.view.php', [
        'errors' => $errors,
        'email' => $email
    ]);
}

return view('auth/forgot.view.php', [
    'message' => 'Set password.'
]);
