<?php

use Core\App;
use Core\Database;

$user_id = $_SESSION['user']['id'];
$task_title = $_POST['title'] ?? '';
$task_description = $_POST['description'] ?? '';
$task_priority = $_POST['priority'] ?? null;
$task_status = $_POST['status'] ?? null;
$task_due_date = $_POST['due_date'] ?? null;
$task_category = $_POST['category'] ?? null;


$db = App::resolve(Database::class);

$errors = [];

if (empty($task_title)) {
    $errors['title'] = 'Title is required';
}

if (empty($task_description)) {
    $errors['description'] = 'Description is required';
}

if (! empty($errors)) {
    $categories = $db->query('SELECT * FROM categories')->get();
    $status = $db->query('SELECT * FROM status')->get();


    view("home/add-task.view.php", [
        'errors' => $errors,
        'categories' => $categories,
        'status' => $status

    ]);
    exit();
}

$user = $db->query('SELECT * FROM users WHERE id = :id', [
    'id' => $user_id
])->findOrFail();


$results = $db->query('INSERT INTO tasks (title, description, priority, status_id, user_id, due_date, category_id) VALUES (:title, :description, :priority, :status_id, :user_id, :due_date, :category_id)', [
    'title' => $task_title,
    'description' => $task_description,
    'priority' => $task_priority,
    'status_id' => $task_status,
    'user_id' => $user_id,
    'due_date' => $task_due_date,
    'category_id' => $task_category
]);

header('Location: /dashboard?success=Task created successfully');
exit();
