<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    //table name
    protected $table = "appointment";
    //all columns
    protected $fillable =[
    	"id",
    	"pat_id",
    	"doc_id",
    	"status",
    	"date_time",
    	"description",
    	"created_at",
    	"updated_at"
    ];
}
