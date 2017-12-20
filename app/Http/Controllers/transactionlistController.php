<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\backendController;
use App\transhistory;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Auth;


class transactionlistController extends backendController
{
	public function list(Request $require)
	{
		$list = new transhistory;
		$list = transhistory::where('Branch', '=', Auth::User()->branch)->get();

		return view ('backend.transactionlist', compact('list'));
	}
	public function finalna(Request $req)
	{
		$final = $req->input("fureberblak");
		$input = $req->input("tid");
		$wew = transhistory::where('trans_number', '=' ,$input[0])->update(array('Total' => $final));
		
		return back();
	}
	public function search(Request $require)
	{
		$searchroad1=$require->input('searchroad1');
        $list= transhistory::where('date','like','%'.$searchroad1.'%')->get();

		return view ('backend.transactionlist', compact('list'));
	}
}