<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\backendController;
use App\User;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Hash;




class confirmController extends backendController
{	
	public function users(Request $req)
  {

  	$name = $req->input('usersname');
  	$email = $req->input('email');
  	$pass = $req->input('password');
  	$password = $req->input('conpass'); 
  	$location = $req->input('blocation');

  	$user = new User;

  	if ($pass == $password){
  		$user->name = $name;
  		$user->email = $email;
  		$user->password = Hash::make($pass);
  		$user->branch = $location;

  		$user->save();

  		return redirect('/admin/users')->with('massage', 'Users Added');

  		
  	}else{

  		return redirect('/admin/users')->with('massage', 'Tanga magkaiba yung password na nilagay mo');
  	

  }
  	}

  	  public function bago(){

		$user = User::all();
		return view ('backend.users', compact('user'));
	}
  public function changepass(Request $req)
  {
    $id = $req->input('NEW');
    $bago = User::find($id); 
      $email = $req->input('email');
      $old = $req->input('oldpassword');
      $New = $req->input('Newpass');
      $Con = $req->input('Conpass');

      if ($New == $Con) {
        
        $bago->email = $email;
        $bago->password = Hash::make($New);

        $bago->save();

        return back()->with('message', 'succesfully Change' );

      }

  }
}	