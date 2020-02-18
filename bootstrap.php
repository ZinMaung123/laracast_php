<?php

$config = require 'config.php';
require 'Database/Connection.php';
require 'Database/QueryBuilder.php';

$pdo = Connection::make($config['database']);
return new QueryBuilder($pdo);