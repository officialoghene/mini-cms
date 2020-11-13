<?php

//var_dump($_POST['name']);
$app['database']->insert('users', [
    'name' => $_POST['name'],
    'username' => $_POST['username']
]);

header("Location: /");