<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formcontroller extends Controller
{
    public function showForm(Request $request)
    {
    	return view("form");
    }
}
