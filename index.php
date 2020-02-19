<?php

require "core/Router.php";
require "core/Request.php";

require 'core/bootstrap.php';

$tasks = $app['query']->selectAll('todos');

require Router::load('routes.php')
    ->direct(Request::uri());