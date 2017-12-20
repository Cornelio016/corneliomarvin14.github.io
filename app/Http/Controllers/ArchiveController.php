<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\backendController;
use Illuminate\Http\Request;  
use App\Service1;
use App\finaltrans;
use App\transHistory;
use App\Staff;
use App\staffarchive;

class ArchiveController extends backendController
{
	public function View(Request $require)
	{
		$archs = new staffarchive;
		$archs = staffarchive::all();
		$archivesearch=$require->input('archivesearch');
		$baliw = staffarchive::where('Name','like','%'.$archivesearch.'%')->orwhere('Email','like','%'.$archivesearch.'%')->orwhere('Cellphone_NO', 'like', '%' .$archivesearch.'%')->get();
		return View('backend.archive', compact('archs', 'baliw'));
	}
	public function Archive($id)
	{	
		
		$service = new Service1;
		$final = new finaltrans;
		$service = Service1::find($id);

		$final->id = $service->id;
		$final->category = $service->category;
		$final->servicename = $service->servicename;
		$final->price = $service->price;

		$final->save();
		$service->delete();

		return redirect('/admin/Transaction');
	}

	public function history()
	{	
		$x=0;

		$history = new transHistory;

		$finals = finaltrans::all();
		
		$edreinpapak=new finaltrans;

		foreach ($finals as $finalss) {
			$lovelypapak=array('id'=> $finalss->id , 'date' => $finalss->date , 'servicename' => $finalss->servicename , 'price' => $finalss->price);
			$history->insert($lovelypapak);
			
			$x++;
		}

		$edreinpapak->truncate();
		return redirect('/admin/Transaction');

	}
	public function staffAchive($id)
	{
		$staff = new Staff;
		$arch = new staffarchive;
		$staff = Staff::find($id);

		$arch->id = $staff->id;
		$arch->Name = $staff->Name;
		$arch->Email = $staff->Email;
		$arch->Cellphone_NO = $staff->Cellphone_NO;
		$arch->postion = $staff->postion;
		$arch->Address = $staff->Address;
		$arch->civil = $staff->civil;
		$arch->Gender = $staff->Gender;
		$arch->blocation = $staff->blocation;



		$arch->save();
		$staff->delete();
		return redirect('/admin/Staff');
	}
	
	public function staffrestore($id)
	{
		$archives = new staffarchive;
		$balik = new Staff;
		$archives = staffarchive::find($id);

		$balik->id = $archives->id;
		$balik->Name = $archives->Name;
		$balik->Email = $archives->Email;
		$balik->Cellphone_NO = $archives->Cellphone_NO;
		$balik->postion = $archives->postion;
		$balik->Address = $archives->Address;
		$balik->civil = $archives->civil;
		$balik->Gender = $archives->Gender;
		$balik->blocation = $archives->blocation;

		$balik->save();
		$archives->delete();

		return redirect('/admin/archivelist');

	}
	

}