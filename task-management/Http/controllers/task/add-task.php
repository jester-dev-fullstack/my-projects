<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$categories = $db->query('SELECT * FROM categories')->get();
$status = $db->query('SELECT * FROM status')->get();

view('home/add-task.view.php', [
    'categories' => $categories,
    'status' => $status
]);
