<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    
    public function home()
    {
    	$people = ['Siva', 'Abirami', 'Aaraathanaa', 'Shrutika'];
    	return view('welcome',compact('people'));
    }

    public function about()
    {
    	$people = ['Siva', 'Abirami', 'Aaraathanaa', 'Shrutika'];
    	return view('pages.about',compact('people'));
    }

    

}
