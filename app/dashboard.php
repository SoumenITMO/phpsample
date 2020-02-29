<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class dashboard extends Model
{
    // Get all data about user
	public static function fetchAllUserData() {
		
		return DB::table('registration')->get();
	}
	
	// Method to create a new user
	public static function createUser($request) {
		
		$fname = $request->input('fname');
		$lastname = $request->input('lname');
		$phone = $request->input('phone');
		$address = $request->input('address');
		$email = $request->input('email');
		$password = md5($request->input('password'));
		
		echo $fname. " " . $lastname . "  " . $phone . "  " . $address . "  " . $email . "  " . $password;
		
		DB::table('registration')->insert(array('fname' => $fname,
									           'lname' => $lastname,
										       'phone' => $phone,
										       'address' => $address));
											   
		DB::table('login')->insert(array('email' => $email,
										 'username' => "",
									     'password' => $password));
		
		/*return DB::table('registration')
			->where("id","=",$uid)->delete();*/
	}
	
	// Method to fetch single data for user for front end
	public static function editUserData($userId) {
		
		return DB::table('registration')->where("id","=",$userId)->get();
	}
	
	// Method to update user data
	public static function updateUser($request) {
		
		$uid = $request->input('uid');
		$fname = $request->input('fname');
		$lastname = $request->input('lname');
		$phone = $request->input('phone');
		$address = $request->input('address');
		
		$updatedUserData = array("fname"=>$fname,
								 "lname"=>$lastname,
								 "phone"=>$phone,
								 "address"=>$address);

		return DB::table('registration')
			->where("id","=",$uid)->update($updatedUserData);
	}
	
	// Method to delete single user
	public static function deleteUser($uid) {
		
		return DB::table('registration')
			->where("id","=",$uid)->delete();
	}
}
