<?php

require_once "vendor/autoload.php";

// require "core/Router.php";
// require "core/Request.php";

require 'app/core/bootstrap.php';

use App\Core\{App, Request, Router};

$tasks = App::get('query')->selectAll('todos');

Router::load('app/routes.php')
    ->direct(Request::uri(), $_SERVER['REQUEST_METHOD']);