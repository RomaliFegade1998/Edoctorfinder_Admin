<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;
use App\state;

class citycontroller extends Controller
{
    public function showAddForm(Request $request)
    {
        $state = state::all();
        return view('city_add')->with('state',$state);
    }
    public function city_add(Request $request)
    {
    	//only print requested params
    	//save this data to table
    	$post= city::create([
    		"state_id"=>$request->state_id,
    		"city_name"=>$request->city_name,
    		]);
            return redirect('/city_show');
            //dd($post)
        }
         //crete show method
        public function city_show(Request $request)
        {
            //Get ALL data from database
            $posts = city::all();
            $searchkey='';
            $posts=city::whereNotNull('id');
            if (!empty($request->title)) {
                $posts=$posts->where('city_name','LIKE','%'.$request->title.'%');
                $searchkey=$request->title;
            }
            $posts=$posts->get();
            //simple display all data here
            return view('city_show')->with('postdata',$posts)->with('searchkey',$searchkey);
            //we can you the data in variable postdata in view
        }
        //add method for delete here
        public function city_delete(Request $request,$id)
        {
            //delete the row
            city::where('id',$id)->delete();
            return redirect('/city_show');
        }
        //update post method
        public function city_update(Request $request,$id)
        {
            //get the data of this id form db
            $post = city::where("id",$id)->first();
            // print the data
            // dd($post);
            // psaa the data to update view 
            return view('city_update')->with('post', $post);
        }
        public function citysaveupdated(Request $request)
        {
            //update row
            city::where('id', $request->id)->update([
                "state_id"=>$request->state_id,
                "city_name"=>$request->city_name,
            ]);
            // Redirect to table
            return redirect('/city_show');
            // oops we forgot one something
            // change route from update form 
            // pass only those fields which in our table
        }
}
