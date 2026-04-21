<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$overview = $db->query('
    SELECT 
        t.id,
        t.title AS task_name,
        c.name AS category_name,
        t.priority AS priority_name,
        s.name AS status_name,
        t.due_date
    FROM tasks t
    LEFT JOIN categories c ON t.category_id = c.id
    LEFT JOIN status s ON t.status_id = s.id
    WHERE t.user_id = :user_id
    ORDER BY t.due_date ASC
', [
    'user_id' => $_SESSION['user']['id']
])->get();


echo json_encode($overview);
exit();
