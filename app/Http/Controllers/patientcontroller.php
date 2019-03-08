<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;

class patientcontroller extends Controller
{
    public function patient_add(Request $request)
    {
    	//only print requested params
    	//save this data to table
    	$post= patient::create([
    		"pat_name"=>$request->pat_name,
    		"pat_age"=>$request->pat_age,
    		"pat_gender"=>$request->pat_gender,
    		"pat_email_id"=>$request->pat_email_id,
    		"pat_password"=>$request->pat_password,
    		"pat_contact_no"=>$request->pat_contact_no,
    		"pat_address"=>$request->pat_address,
            "pat_image"=>$request->file,
    		]);
            return redirect('/patient_show');
            //dd($post)
        }
    	//crete show method
        public function patient_show(Request $request)
        {
            //Get ALL data from database
            $posts = patient::all();
            $searchkey='';
            $posts=patient::whereNotNull('id');
            if (!empty($request->title)) {
                $posts=$posts->where('pat_age','LIKE','%'.$request->title.'%');
                $searchkey=$request->title;
            }
            $posts=$posts->get();
            //simple display all data here
            return view('patient_show')->with('postdata',$posts)->with('searchkey',$searchkey);
            //we can you the data in variable postdata in view
        }
        //add method for delete here
        public function patient_delete(Request $request,$id)
        {
            //delete the row
            patient::where('id',$id)->delete();
            return redirect('/patient_show');

        }
        //update post method
        public function patient_update(Request $request,$id)
        {
            //get the data of this id form db
            $post = patient::where("id",$id)->first();
            // print the data
            // dd($post);
            // psaa the data to update view 
            return view('patient_update')->with('post', $post);
        }
        public function patientsaveupdated(Request $request)
        {
            //update row
            patient::where('id', $request->id)->update([
                "pat_name"=>$request->pat_name,
                "pat_age"=>$request->pat_age,
                "pat_gender"=>$request->pat_gender,
                "pat_email_id"=>$request->pat_email_id,
                "pat_password"=>$request->pat_password,
                "pat_contact_no"=>$request->pat_contact_no,
                "pat_address"=>$request->pat_address,
            ]);
            // Redirect to table
            return redirect('/patient_show');
            // oops we forgot one something
            // change route from update form 
            // pass only those fields which in our table
        }
         // add method for view here
    	public function patient_view(Request $request,$id)
    	{
        //get the data of this id from db
        $post = patient::find($id);
        // print the data
        //dd($post);
        // pass the data to update view
        return view('patient_view')->with('post',$post);
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
                'pat_image'=>$fullName
            ]);
        }

}
