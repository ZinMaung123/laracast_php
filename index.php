<?php

require_once "vendor/autoload.php";

// require "core/Router.php";
// require "core/Request.php";

require 'core/bootstrap.php';

$tasks = $app['query']->selectAll('todos');
$users = $app['query']->selectAll('users');

require Router::load('routes.php')
    ->direct(Request::uri(), $_SERVER['REQUEST_METHOD']);