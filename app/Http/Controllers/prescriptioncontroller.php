<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prescription;
use App\doctor;
use App\treatment;
use App\patient;

class prescriptioncontroller extends Controller
{
    public function showAddForm(Request $request)
    {
        $prescription = prescription::all();
        return view('prescription_add')->with('prescription',$prescription);
    }
    
    public function prescription_add(Request $request)
    {
    	//only print requested params
    	//save this data to table
    	$post= prescription::create([
    		"pat_id"=>$request->pat_id,
    		"doc_id"=>$request->doc_id,
    		"tre_id"=>$request->tre_id,
    		"medicine"=>$request->medicine,
    		"description"=>$request->description,
    		]);
            return redirect('/prescription_show');
            //dd($post)
        }

        //creat show method here
        public function prescription_show(Request $request)
        {
            //Get ALL data from database
             $searchkey='';
            $posts=prescription::whereNotNull('id');
            if (!empty($request->title)) {
                $posts=$posts->where('medicine','LIKE','%'.$request->title.'%');
                $searchkey=$request->title;
            }
            $posts=$posts->get();
            //simple display all data here
            return view('prescription_show')->with('postdata',$posts)->with('searchkey',$searchkey);
            //we can you the data in variable postdata in view
        }
        //add method for delete here
        public function prescriptiondelete(Request $request,$id)
        {
            //delete the row
            prescription::where('id',$id)->delete();
            return redirect('/prescription_show');

        }
        //update post method
        public function prescription_update(Request $request,$id)
        {
            //get the data of this id form db
            $post = prescription::where("id",$id)->first();
            // print the data
            // dd($post);
            // psaa the data to update view 
            return view('prescription_update')->with('post', $post);
        }
        public function prescriptionsaveupdated(Request $request)
        {
            //update row
            prescription::where('id', $request->id)->update([
                "pat_id"=>$request->pat_id,
                "doc_id"=>$request->doc_id,
                "tre_id"=>$request->tre_id,
                "medicine"=>$request->medicine,
                "description"=>$request->description,
            ]);
            // Redirect to table
            return redirect('/prescription_show');
            // oops we forgot one something
            // change route from update form 
            // pass only those fields which in our table
        }
        // add method for view here
        public function prescription_view(Request $request,$id)
        {
        //get the data of this id from db
        $post = prescription::find($id);
        // print the data
        //dd($post);
        // pass the data to update view
        return view('prescription_view')->with('post',$post);
        }
}