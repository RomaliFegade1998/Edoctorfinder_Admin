<?php
	
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appointment;

class appointmentController extends Controller
{
        // add method for view here
        public function appointmentview(Request $request,$id)
        {
        //get the data of this id from db
        $post = appointment::find($id);
        // print the data
        //dd($post);
        // pass the data to update view
        return view('appointmentview')->with('post',$post);
        }
}    	





