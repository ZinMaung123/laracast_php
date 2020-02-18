<?php

require 'functions.php';

$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos');

include 'views/index.view.php';