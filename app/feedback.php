<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    //Table Name
    protected $table = "feedback"; 
    //All columns
    protected $fillable = [
    	"id",
    	"pat_id",
    	"admin_id",
    	"comment",
    	"status",
        "created_at",
        "updated_at"
    ];

}
