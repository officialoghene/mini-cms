<?php

namespace App\Controllers;
use App\Core\App;

class PagesController
{
    public function home()
    {
        $tasks = App::get('database')->selectAll('tasks');
        
        return view('index', ['tasks' => $tasks]);
    }

    public function about()
    {
        require 'views/about.view.php';
    }

    public function contact()
    {
        require 'views/contact.view.php';
    }

    public function tasks()
    {
        App::get('database')->insert('tasks', [
            'description' => $_POST['description'],
            'isComplete' => $_POST['isComplete']
        ]);

       return redirect('');
    }
}