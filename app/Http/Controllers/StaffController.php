<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\backendController;
use App\Staff;
use Illuminate\Http\Request;  




class StaffController extends backendController
{
	public function Staff(Request $req)
	{ 
       $name = $req->input('name');
       $email = $req->input('Email');
       $Cell = $req->input('Cell_#');
       $Add = $req->input('Address');
       $POS = $req->input('position');
       $civil = $req->input('civil');
       $gen = $req->input('Gender');
       $bloc = $req->input('bloc');

       $Staf = new Staff;
       $Staf->Name = $name;
       $Staf->Email = $email;
       $Staf->Cellphone_NO = $Cell;
       $Staf->Address = $Add;
       $Staf->postion = $POS;
       $Staf->civil = $civil;
       $Staf->Gender = $gen;
       $Staf->blocation = $bloc;


        $Staf->save();
        return redirect('/admin/Staff');
	}
	public function labasbeau(Request $require){

		$staf = Staff::all();
    $Ser=$require->input('srchstaff');

      $srch= Staff::where('Name','like','%'.$Ser.'%')->get();

		return view ('backend.Staff', compact('staf', 'srch'));
	}
  public function Update(Request $req){

      $name = $req->input('name');
       $email = $req->input('Email');
       $Cell = $req->input('Cell_#');
       $Add = $req->input('Address');
       $POS = $req->input('postion');
       $civil = $req->input('civil');
       $gen = $req->input('Gender');
       $bloc = $req->input('bloc');

       $bahalaka = $req->input('bahalaka');

      $staf = new Staff;
      $iaupdate = array('Name' => $name, 'Email' => $email, 'Cellphone_NO' => $Cell, 'Address' => $Add, 'postion' => $POS, 'civil' => $civil, 'Gender' => $gen, 'blocation' => $bloc);
      $staf->where('id','=', $bahalaka)->update($iaupdate);
       
        return redirect('/admin/Staff');
     }

     public function delete($id){

      Staff::where('id' ,'=', $id)->delete();
      
       
        return redirect('/admin/Staff');
     }
  

}