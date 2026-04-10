<?php

view("index.view.php", [
    'errors' => $errors ?? [],
    'email' => $email ?? ''
]);
