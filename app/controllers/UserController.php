<?php

namespace App\Controllers;

use App\Core\App;

class UserController{

    public function create()
    {
        //create user form
        return view('users.create');
    }

    public function store()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($_POST['password'] !== $_POST['confirm_password']){
            return redirect('/register');
        }

        $_POST['password'] = hash_helper($_POST['password']);

        App::get('query')->insert('users', [
            'name' => trim($_POST['name']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        //create user form
        flash('success', 'Register Success!Please Login.');
        return redirect('/login');
    }

    public function loginForm()
    {
       return view('users.login');
    }

    public function login()
    {
        $user = App::get('query')->selectWithEmail($_POST['email']);

        if($user && password_verify($_POST['password'], $user['password'])){
            $this->loginUser($user);
        }

        return redirect("/");
    }
    
    public function loginUser($user)
    {
        $_SESSION['user'] = $user;
    }

    public function logout()
    {
        unset($_SESSION['user']);
        session_destroy();

        return redirect('/');
    }
}