<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class PagesController extends Controller
{   /**
     * Display home page with data gotten 
	 * from database
	 * 
	 * @return \Illuminate\Http\Response
	 */
    public function home()
    {  
		// Fetch all users from database 
		$users = User::all();
		// Return the view with users
        return view('home', [
			     'users' => $users,
			   ]);
    }
    
    public function about()
    {
        return view('about.about');
    }
    
    public function contact()
    {
        return view('contact.contact');
    }
}
