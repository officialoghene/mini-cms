<?php

App::get('database')->insert('tasks', [
    'description' => $_POST['description'],
    'isComplete' => $_POST['isComplete']
]);

header("Location: /");