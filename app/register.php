<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class register extends Authenticatable
{
    use Notifiable;
	//table name
    protected $table = "register";
    protected $primaryKey="id";
    //all columns
    protected $fillable =[
    	"id",
    	"first_name",
    	"last_name",
    	"email_address",
        "gender",
    	"password",
    	"confirm_password",
        "remember_token",
    	"created_at",
    	"updated_at"
    ];
}
