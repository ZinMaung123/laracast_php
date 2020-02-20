<?php

$router->get('' , 'controllers/index.php');

$router->get('about' , 'controllers/about.php');

$router->get('about/culture' , 'controllers/culture.php');

$router->post('names' , 'controllers/insert-name.php');