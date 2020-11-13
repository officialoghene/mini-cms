<?php

$router->get('', 'controllers/index.php');
$router->get('profile', 'controllers/profile.php');
$router->get('contact', 'controllers/contact.php');
$router->get('about', 'controllers/about.php');
$router->get('', 'controllers/index.php');

$router->post('names', 'controllers/add-name.php');
$router->post('tasks', 'controllers/add-task.php');