<?php


$router->get('/', 'index.php');
$router->get('/dashboard', 'dashboard.php');
$router->get('/register', 'auth/register.php');
$router->get('/forgot-password', 'auth/forgot.php');

$router->post('/login', 'auth/login.php');
$router->post('/register', 'auth/register.store.php');
$router->post('/forgot-password', 'auth/forgot.store.php');
$router->delete('/logout', 'auth/logout.php');
