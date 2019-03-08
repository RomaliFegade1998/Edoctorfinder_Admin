<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    //table name
    protected $table = "city";
    //all columns
    protected $fillable =[
    	"id",
    	"state_id",
    	"city_name",
    	"created_at",
    	"updated_at"
    ];
}
