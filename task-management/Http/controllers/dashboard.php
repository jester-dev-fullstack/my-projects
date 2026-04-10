<?php

date_default_timezone_set('Asia/Manila');
$time = date('h:i A');

view('home/dashboard.view.php', [
    'time' => $time
]);
