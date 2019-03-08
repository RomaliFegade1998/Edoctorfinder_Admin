<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
use App\doctor;

class schedulecontroller extends Controller
{
    public function showAddForm(Request $request)
    {
        $doctor = doctor::all();
        return view('schedule_add')->with('doctor',$doctor);
    }
    public function schedule_add(Request $request)
    {
    	//only print requested params
    	//save this data to table
    	$post= schedule::create([
    		"doc_id"=>$request->doc_id,
    		"date_time"=>$request->date_time,
    		]);
            return redirect('/schedule_show');
            //dd($post)
        }
        //crete show method
        public function schedule_show(Request $request)
        {
            //Get ALL data from database
            $posts = schedule::all();
            $searchkey='';
            $posts=schedule::whereNotNull('id');
            if (!empty($request->title)) {
                $posts=$posts->where('date_time','LIKE','%'.$request->title.'%');
                $searchkey=$request->title;
            }
            $posts=$posts->get();
            //simple display all data here
            return view('schedule_show')->with('postdata',$posts)->with('searchkey',$searchkey);
            //we can you the data in variable postdata in view
        }
        //add method for delete here
        public function schedule_delete(Request $request,$id)
        {
            //delete the row
            schedule::where('id',$id)->delete();
            return redirect('/schedule_show');

        }
        //update post method
        public function schedule_update(Request $request,$id)
        {
            //get the data of this id form db
            $post = schedule::where("id",$id)->first();
            // print the data
            // dd($post);
            // psaa the data to update view 
            return view('schedule_update')->with('post', $post);
        }
        public function schedulesaveupdated(Request $request)
        {
            //update row
            schedule::where('id', $request->id)->update([
                "doc_id"=>$request->doc_id,
                "date_time"=>$request->date_time,
            ]);
            // Redirect to table
            return redirect('/schedule_show');
            // oops we forgot one something
            // change route from update form 
            // pass only those fields which in our table
        }
         // add method for view here
    	public function schedule_view(Request $request,$id)
    	{
        //get the data of this id from db
        $post = schedule::find($id);
        // print the data
        //dd($post);
        // pass the data to update view
        return view('schedule_view')->with('post',$post);
    	}
}
