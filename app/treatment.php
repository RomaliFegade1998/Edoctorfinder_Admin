<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class treatment extends Model
{
    //table name
    protected $table = "treatment";
    //all columns
    protected $fillable =[
    	"id",
    	"doc_id",
    	"app_id",
    	"date_time",
    	"treatment",
    	"created_at",
    	"updated_at"
    ];
}


