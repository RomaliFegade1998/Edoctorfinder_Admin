<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class speciality extends Model
{
    //table name
    protected $table = "speciality";
    //all columns
    protected $fillable =[
    	"id",
    	"doc_id",
    	"spec_name",
    	"created_at",
    	"updated_at"
    ];
}
