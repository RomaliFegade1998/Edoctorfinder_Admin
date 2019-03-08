<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\state;

class statecontroller extends Controller
{
    public function state_add(Request $request)
    {
    	//only print requested params
    	//save this data to table
    	$post= state::create([
    		"state_name"=>$request->state_name,
    		]);
            return redirect('/state_show');
            //dd($post)
        }
        //crete show method
        public function state_show(Request $request)
        {
            //Get ALL data from database
            $posts = state::all();
            $searchkey='';
            $posts=state::whereNotNull('id');
            if (!empty($request->title)) {
                $posts=$posts->where('state_name','LIKE','%'.$request->title.'%');
                $searchkey=$request->title;
            }
            $posts=$posts->get();
            //simple display all data here
            return view('state_show')->with('postdata',$posts)->with('searchkey',$searchkey);
            //we can you the data in variable postdata in view
        }
        //add method for delete here
        public function state_delete(Request $request,$id)
        {
            //delete the row
            state::where('id',$id)->delete();
            return redirect('/state_show');
        }
        //update post method
        public function state_update(Request $request,$id)
        {
            //get the data of this id form db
            $post = state::where("id",$id)->first();
            // print the data
            // dd($post);
            // psaa the data to update view 
            return view('state_update')->with('post', $post);
        }
        public function statesaveupdated(Request $request)
        {
            //update row
            state::where('id', $request->id)->update([
                "state_name"=>$request->state_name,
            ]);
            // Redirect to table
            return redirect('/state_show');
            // oops we forgot one something
            // change route from update form 
            // pass only those fields which in our table
        }
}
