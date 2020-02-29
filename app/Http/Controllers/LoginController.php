<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\login;

class LoginController extends Controller
{
    // To get Login view
	public function index() {
		return view("login");
	}
	
	public function doLogin(Request $request) {
		
		$email = $request->input('email');
		$password = md5($request->input('password'));
		
		$getlogin = login::fetchLoginData($email, $password);
		if($getlogin == 1) {
			return redirect('getdata');
		} else {  
			return redirect('test');
		}
	}
}
