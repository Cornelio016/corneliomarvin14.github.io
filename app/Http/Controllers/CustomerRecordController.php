<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\backendController;
use App\CustomerRecord;
use Illuminate\Http\Request;  


class CustomerRecordController extends backendController
{
	public function CustomerRecord(Request $require)
	{
		$Cus = customerrecord::all();
		$Ser = $require->input('Name');

		$Cus =	customerrecord::where('name','like', '%' .$Ser. '%')->orwhere('id','like', '%' .$Ser. '%')->get();
		return view ('backend.CustomerRecord', compact('Cus'));
	}
	public function AddingCustomer(Request $req)
	{

		 $id =$req->input('id');
		 $name =$req->input('name');
		 $email = $req->input('Email');
		 $cell =$req->input('Cell');
		 $branch = $req->input('Branch');

		 $Cus = new CustomerRecord;		 
		 $Cus->id = $id;
		 $Cus->name = $name;
		 $Cus->email = $email;
		 $Cus->cellphone = $cell;
		 $Cus->branch = $branch;

		 $Cus->save();
		return redirect('/manager/Customer');
	}

}