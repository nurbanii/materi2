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
	function loginnProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			return redirect('beranda')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('loginn');
	}

	function registration(){

	}

	function forgotPassword(){

	}
}