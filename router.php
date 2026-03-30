<?php

require 'Core/functions.php';


$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '../Http/controllers/index.php',
    '/subjects.php' => '../Http/controllers/subjects.php',
    '/notes.php' => '../Http/controllers/notes.php',
    '/habits.php' => '../Http/controllers/habits.php',
];





routeToController($url, $routes);