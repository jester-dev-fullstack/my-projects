<?php

use Core\App;
use Core\Validator;
use Core\Database;


$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::string($firstName, 2, 255)) {
    $errors['first_name'] = "Please provide a first name of at least 2 characters.";
}

if (!Validator::string($lastName, 2, 255)) {
    $errors['last_name'] = "Please provide a last name of at least 2 characters.";
}

if (!Validator::email($email)) {
    $errors['email'] = "Please provide a valid email address.";
}

if (!Validator::string($password, 6, 255)) {
    $errors['password'] = "Please provide a password of at least 7 characters.";
}

if (! empty($errors)) {
    return view('auth/register.view.php', [
        'errors' => $errors,
        'first_name' => $firstName,
        'last_name' => $lastName,
        'email' => $email,
        'password' => $password
    ]);
}

$db = App::resolve(Database::class);

$db->query(
    "INSERT INTO users (first_name, last_name, email, password) 
     VALUES (:first_name, :last_name, :email, :password)",
    [
        "first_name" => $firstName,
        "last_name" => $lastName,
        "email" => $email,
        "password" => password_hash($password, PASSWORD_BCRYPT)
    ]
);

header("Location: /");
exit();
