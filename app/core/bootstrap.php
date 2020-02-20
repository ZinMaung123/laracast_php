<?php

use App\Core\App;
// $app = [];

App::bind('config', require 'config.php');

// require 'Database/Connection.php';
// require 'Database/QueryBuilder.php';

$pdo = Connection::make(App::get('config')['database']);

App::bind('query', new QueryBuilder($pdo));

function view($view, $data = [])
{
    extract($data);

    require "app/views/{$view}.view.php";
}

function redirect($path)
{
    $path = trim($path, '/');
    header("Location: /{$path}");
}