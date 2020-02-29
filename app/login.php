<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class login extends Model
{
	
	// Validate login
	public static function fetchLoginData($email, $password) {
		
		return DB::table('login')->where("email","=",$email)->where("password","=",$password)->count();
	}
}
