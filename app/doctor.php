<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    //table name
    protected $table = "doctor";
    //all columns
    protected $fillable =[
    	"id",
    	"doc_name",
    	"doc_education",
    	"doc_address",
    	"doc_contact_no",
    	"doc_email_id",
    	"doc_password",
        "doc_image",
    	"created_at",
    	"updated_at"
    ];
}
