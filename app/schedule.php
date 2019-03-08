<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    //table name
    protected $table = "schedule";
    //all columns
    protected $fillable =[
    	"id",
    	"doc_id",
    	"date_time",
    	"created_at",
    	"updated_at"
    ];
}
