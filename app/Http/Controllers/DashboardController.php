<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\dashboard;

class DashboardController extends Controller
{
    // Get all user data
	public function fetchAllUserData() {
		
		$userData = dashboard::fetchAllUserData();
		return view("dashboard", ["data"=>$userData]);
	}
	
	// Show create user form
	public function createUser(Request $request) {
		
		return view("createuser");
	}
	
	public function register(Request $request) {
		
		$userData = dashboard::createUser($request);
		return view("createuser");
	}
	
	// Get Edit User Window
	public function editUserData($uid) {
		
		$userData = dashboard::editUserData($uid);
	    return view("edituser", ["data"=>$userData]);
	}
	
	// Update User Data
	public function updateUser(Request $request) {
		
		$updatedUserResponse = dashboard::updateUser($request);
		if($updatedUserResponse) {
			return redirect('getdata');
		}
	}
	
	// Delete User
	public function deleteUser($uid) {
		
		$updatedUserResponse = dashboard::deleteUser($uid);
		return redirect('getdata');
	}
}
