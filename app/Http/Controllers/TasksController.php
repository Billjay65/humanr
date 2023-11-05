<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        return 'Hello, World!';
    }
    
    public function store()
    {
        Task::create(request()->only(['title', 'description']));
        
        return redirect('tasks');
    }    
}
