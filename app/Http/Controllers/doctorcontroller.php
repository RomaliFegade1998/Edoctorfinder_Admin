<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;

class doctorcontroller extends Controller
{
    public function doctor_add(Request $request)
    {
    	//only print requested params
    	//save this data to table
    	$post= doctor::create([
    		"doc_name"=>$request->doc_name,
    		"doc_education"=>$request->doc_education,
    		"doc_address"=>$request->doc_address,
    		"doc_contact_no"=>$request->doc_contact_no,
    		"doc_email_id"=>$request->doc_email_id,
    		"doc_password"=>$request->doc_password,
            "doc_image"=>$request->file,
    		]);
            return redirect('/doctor_show');
            //dd($post)
        }
    	 //crete show method
        public function doctor_show(Request $request)
        {
            //Get ALL data from database
            $posts = doctor::all();
            $searchkey='';
            $posts=doctor::whereNotNull('id');
            if (!empty($request->title)) {
                $posts=$posts->where('doc_name','LIKE','%'.$request->title.'%');
                $searchkey=$request->title;
            }
            $posts=$posts->get();
            //simple display all data here
            return view('doctor_show')->with('postdata',$posts)->with('searchkey',$searchkey);
            //we can you the data in variable postdata in view
        }
        //add method for delete here
        public function doctor_delete(Request $request,$id)
        {
            //delete the row
            doctor::where('id',$id)->delete();
            return redirect('/doctor_show');

        }
         //update post method
        public function doctor_update(Request $request,$id)
        {
            //get the data of this id form db
            $post = doctor::where("id",$id)->first();
            // print the data
            // dd($post);
            // psaa the data to update view 
            return view('doctor_update')->with('post', $post);
        }
        public function doctorsaveupdated(Request $request)
        {
            //update row
            doctor::where('id', $request->id)->update([
                "doc_name"=>$request->doc_name,
				"doc_education"=>$request->doc_education,                
                "doc_address"=>$request->doc_address,
                "doc_contact_no"=>$request->doc_contact_no,
                "doc_email_id"=>$request->doc_email_id,
                "doc_password"=>$request->doc_password,
            ]);
            // Redirect to table
            return redirect('/doctor_show');
            // oops we forgot one something
            // change route from update form 
            // pass only those fields which in our table
        }
         // add method for view here
        public function doctor_view(Request $request,$id)
        {
        //get the data of this id from db
        $post = doctor::find($id);
        // print the data
        //dd($post);
        // pass the data to update view
        return view('doctor_view')->with('post',$post);
        }
        public function showForm(Request $request)
        {
            $files = file::all();
            return view("form")->with('files', $files);
        }
        public function submit(Request $request)
        {
            //simply print request
            $file = $request->avatar;
            $filePath = 'upload';
            $filename = $file->getClientOriginalName();
            $file->move($filePath,$filename);
            $fullName = $filePath .'/'.$filename;
            file::create([
                'doc_image' =>$fullName
            ]);
        }

}
