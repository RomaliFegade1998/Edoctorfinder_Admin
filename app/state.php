<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    //table name
    protected $table = "state";
    //all columns
    protected $fillable =[
    	"id",
    	"state_name",
    	"city_id",
    	"created_at",
    	"updated_at"
    ];
}
