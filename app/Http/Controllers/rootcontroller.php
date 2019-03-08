<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\MessageBag;
class rootcontroller extends Controller
{
    public function attemptLogin(Request $request)
    {
    	if(Auth::attempt([
    		"Email_address"=>$request->email_address,
    		"Password"=>$request->password
    	]))
    	{
    		dd("Login Success");
    	}else{
    		return redirect('/login')->withErrors(['credentials'=>'Invalid credentials']);
    	}
    }
}
