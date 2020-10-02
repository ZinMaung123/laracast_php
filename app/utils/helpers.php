<?php

if(!function_exists('flash')){
    function flash($name, $message){
        if(!empty($name)){
            $_SESSION[$name] = $message;
        }
    }
}

if(!function_exists('dd')){
    function dd($data){
        var_dump($data);
        exit;
    }
}

if(!function_exists('hash_helper')){
    function hash_helper($data){
        return password_hash($data, PASSWORD_DEFAULT);
    }
}

if(!function_exists('auth')){
    function auth(){
        return isset($_SESSION['user']);
    }
}