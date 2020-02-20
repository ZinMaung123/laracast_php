<?php

namespace App\Controllers;

use App\Core\App;

class PageController
{
    public function home()
    {
        $users = App::get('query')->selectAll('users');

        return view("index", compact('users'));
    }

    public function about()
    {
        return view("about");
    }

    public function culture()
    {
        return view("about-culture");
    }

    public function addUser()
    {
        App::get('query')->insert('users', [
            'name' => $_POST['name']
        ]);

        return redirect('/');
    }
}