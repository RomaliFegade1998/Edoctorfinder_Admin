<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    //table name
    protected $table = "prescription";
    //all columns
    protected $fillable =[
    	"id",
    	"pat_id",
    	"doc_id",
    	"tre_id",
    	"medicine",
    	"description",
    	"created_at",
    	"updated_at"
    ];
}
