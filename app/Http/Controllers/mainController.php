<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
	function index()
	{
		return view('Login');
	}

	function checklogin(Request $request)
	{
	
		$admin_data=array(
		'Name'=>$request->('uname'),
		'Password'=>$request->('psw')
		);
		
		if(Auth::attempt($admin_data))
		{
			return redirect('/successlogin');
		}
		else
		{
			return back()->wiht('error','Wrong Login Details');
		}
	}

	function successlogin()
	{
		return view('sucesslogin');
	}
	function logout()
	{
		Auth::logout();
		return redirect('/login')
	}

}
