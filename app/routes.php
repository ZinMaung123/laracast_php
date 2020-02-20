<?php

$router->get('' , "App\Controllers\PageController@home");

$router->get('about' , 'App\Controllers\PageController@about');

$router->get('about/culture' , 'App\Controllers\PageController@culture');

$router->post('names' , 'App\Controllers\PageController@addUser');