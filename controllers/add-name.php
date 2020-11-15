<?php

//var_dump($_POST['name']);
App::get('database')->insert('users', [
    'name' => $_POST['name'],
    'username' => $_POST['username']
]);

header("Location: /");