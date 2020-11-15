<?php
 
$tasks = App::get('database')->selectAll('tasks');

$users = App::get('database')->selectAll('users');

require 'views/index.view.php';