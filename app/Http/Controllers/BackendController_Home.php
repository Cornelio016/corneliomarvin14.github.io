<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\BackendController;
use App\login;

class BackendController_Home extends BackendController
{
	public function index()
	{   
        
        return View('backend.home');
	}
	public function logintrails()
	{
		
		$logins = login::all();
		return view('backend.logintanga', compact('logins'));
	}
}