<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //app/Http/Controllers/MyController.php
    public function about() {
        $name = 'John Doe,';
        $profession = 'A Writer';
        return view('pages.about', compact('name', 'profession'));
    }
}

?>