<?php

use App\Core\App;
// $app = [];

App::bind('config', require 'config.php');

// require 'Database/Connection.php';
// require 'Database/QueryBuilder.php';

$pdo = Connection::make(App::get('config')['database']);

App::bind('query', new QueryBuilder($pdo));

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/utils/helpers.php";

function view($view, $data = [])
{
    $directories = explode('.', $view);
    $pathToView = rtrim(implode("/", $directories), '/');

    extract($data);

    require "app/views/{$pathToView}.view.php";
}

function redirect($path)
{
    $path = trim($path, '/');
    header("Location: /{$path}");
}