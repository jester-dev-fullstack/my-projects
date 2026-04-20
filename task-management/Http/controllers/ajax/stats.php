<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$stats = $db->query('
    SELECT 
        COUNT(*) AS total,
        SUM(CASE WHEN status_id = 1 THEN 1 ELSE 0 END) AS completed,
        SUM(CASE WHEN status_id = 2 THEN 1 ELSE 0 END) AS pending,
        SUM(CASE WHEN status_id = 3 THEN 1 ELSE 0 END) AS in_progress
    FROM tasks
    WHERE user_id = :user_id
', [
    'user_id' => $_SESSION['user']['id']
])->find();

header('Content-Type: application/json');
echo json_encode($stats);
