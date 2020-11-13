<?php

$app['database']->insert('tasks', [
    'description' => $_POST['description'],
    'isComplete' => $_POST['isComplete']
]);

header("Location: /");