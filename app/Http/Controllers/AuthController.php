<?php

namespace App\Http\Controllers;
use Auth;

/**
 * 
 */
class AuthController extends Controller{
	
	
	function showLoginn(){
		return view('admin/loginn');
	}
	function loginProcess(){
		if(Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
			return redirect('about')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('login');
	}

	function registration(){

	}

	function forgotPassword(){

	}
}