<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\speciality;
use App\doctor;

class specialitycontroller extends Controller
{
     public function showAddForm(Request $request)
    {
        $doctor = doctor::all();
        return view('speciality_add')->with('doctor',$doctor);
    }
    public function speciality_add(Request $request)
    {
    	//only print requested params
    	//save this data to table
    	$post= speciality::create([
    		"doc_id"=>$request->doc_id,
    		"spec_name"=>$request->spec_name,
    		]);
            return redirect('/speciality_show');
            //dd($post)
        }
        //creat show method here
        public function speciality_show(Request $request)
        {
            //Get ALL data from database
           $posts = speciality::all();
            $searchkey='';
            $posts=speciality::whereNotNull('id');
            if (!empty($request->title)) {
                $posts=$posts->where('spec_name','LIKE','%'.$request->title.'%');
                $searchkey=$request->title;
            }
            $posts=$posts->get();
            //simple display all data here
            return view('speciality_show')->with('postdata',$posts)->with('searchkey',$searchkey);
            //we can you the data in variable postdata in view
        }
        //add method for delete here
        public function speciality_delete(Request $request,$id)
        {
            //delete the row
            speciality::where('id',$id)->delete();
            return redirect('/speciality_show');

        }
        //update post method
        public function speciality_update(Request $request,$id)
        {
            //get the data of this id form db
            $post = speciality::where("id",$id)->first();
            // print the data
            // dd($post);
            // psaa the data to update view 
            return view('speciality_update')->with('post', $post);
        }
        public function specialitysaveupdated(Request $request)
        {
            //update row
            speciality::where('id', $request->id)->update([
                "doc_id"=>$request->doc_id,
                "spec_name"=>$request->spec_name,
            ]);
            // Redirect to table
            return redirect('/speciality_show');
            // oops we forgot one something
            // change route from update form 
            // pass only those fields which in our table
        }
         // add method for view here
        public function speciality_view(Request $request,$id)
        {
        //get the data of this id from db
        $post = speciality::find($id);
        // print the data
        //dd($post);
        // pass the data to update view
        return view('speciality_view')->with('post',$post);
        }
}
