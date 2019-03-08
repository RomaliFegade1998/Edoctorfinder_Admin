<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\treatment;
use App\doctor;
use App\appointment;

class treatmentController extends Controller
{
    public function showAddForm(Request $request)
    {
        $treatment = treatment::all();
        return view('treatment_add')->with('treatment',$treatment);
    }
    //add method Here
    public function treatment_add(Request $request)
    {
    	//only print requested params
    	//save this data to table
    	$post= treatment::create([
    		"doc_id"=>$request->doc_id,
    		"app_id"=>$request->app_id,
    		"date_time"=>$request->date_time,
    		"treatment"=>$request->treatment,
    		]);
            return redirect('/treatment_show');
            //dd($post)
        }
        //creat show method here
    	public function treatment_show(Request $request)
    	{
    		//Get ALL data from database
    		$posts = treatment::all();
            $searchkey='';
            $posts=treatment::whereNotNull('id');
            if (!empty($request->title)) {
                $posts=$posts->where('doc_id','LIKE','%'.$request->title.'%');
                $searchkey=$request->title;
            }
            $posts=$posts->get();
            //simple display all data here
    		return view('treatment_show')->with('postdata',$posts)->with('searchkey',$searchkey);
    		//we can you the data in variable postdata in view
    	}


    	//add method for delete here
    	public function treatment_delete(Request $request,$id)
    	{
    		//delete the row
    		treatment::where('id',$id)->delete();
    		return redirect('/treatment_show');

    	}


    	//update post method
    	public function treatment_update(Request $request,$id)
    	{
    		//get the data of this id form db
    		$post = treatment::where("id",$id)->first();
    		// print the data
    		// dd($post);
    		// psaa the data to update view 
    		return view('treatment_update')->with('post', $post);
    	}
    	public function treatmentsaveupdated(Request $request)
    	{
    		//update row
    		treatment::where('id', $request->id)->update([
    			"doc_id"=>$request->doc_id,
    			"app_id"=>$request->app_id,
    			"date_time"=>$request->date_time,
    			"treatment"=>$request->treatment,
    		]);
    		// Redirect to table
    		return redirect('/treatment_show');
    		// oops we forgot one something
    		// change route from update form 
    		// pass only those fields which in our table
    	}
         // add method for view here
        public function treatment_view(Request $request,$id)
        {
        //get the data of this id from db
        $post = treatment::find($id);
        // print the data
        //dd($post);
        // pass the data to update view
        return view('treatment_view')->with('post',$post);
        }
    }    	


	