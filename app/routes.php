<?php

$router->get('' , "App\Controllers\PageController@home");

$router->get('register' , "App\Controllers\UserController@create");

$router->post('register' , "App\Controllers\UserController@store");
$router->get('login' , "App\Controllers\UserController@loginForm");
$router->post('login' , "App\Controllers\UserController@login");
$router->get('logout' , "App\Controllers\UserController@logout");

$router->get('about' , 'App\Controllers\PageController@about');

$router->get('about/culture' , 'App\Controllers\PageController@culture');

$router->post('names' , 'App\Controllers\PageController@addUser');