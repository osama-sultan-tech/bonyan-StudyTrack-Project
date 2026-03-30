<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function routeToController($url, $routes)
{
    $heading = 'Home Page';

    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {

        abort();
    }

}

function abort($code = 404)
{
    http_response_code($code);

    require "../views/partials/{$code}.php";

    die();
}