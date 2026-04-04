<?php

require 'Core/functions.php';


$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '../Http/controllers/index.php',
    '/subjects' => '../Http/controllers/subjects.php',
    '/notes' => '../Http/controllers/notes.php',
    '/note' => '../Http/controllers/note.php',
    '/habits' => '../Http/controllers/habits.php',
];





routeToController($url, $routes);