<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    //table name
    protected $table = "patient";
    //all columns
    protected $fillable =[
    	"id",
    	"pat_name",
    	"pat_age",
    	"pat_gender",
    	"pat_email_id",
    	"pat_password",
    	"pat_contact_no",
    	"pat_address",
        "pat_image",
    	"created_at",
    	"updated_at"
    ];
}
