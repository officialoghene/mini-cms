<?php

namespace App\Controllers;
use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users', ['users' => $users]);
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
            'username' => $_POST['username']
        ]);

        return redirect('users');
    }
}