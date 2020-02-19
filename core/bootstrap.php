<?php

$app = [];

$app['config'] = require 'config.php';

require 'Database/Connection.php';
require 'Database/QueryBuilder.php';

$pdo = Connection::make($app['config']['database']);

$app['query'] = new QueryBuilder($pdo);