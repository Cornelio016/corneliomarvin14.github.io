<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\backendController;
use App\SerCat;
use App\Service1;
use Illuminate\Http\Request;  


class ServiceCategoryController extends backendController
{
	public function View(Request $require)
	{
		
		$cats = SerCat::all();
		$finalcase = Service1::all();
		  $Ser=$require->input('Ser');

		  $srch= Service1::where('category','like','%'.$Ser.'%')->get();

		return view ('backend.ServiceCategory', compact('cats', 'finalcase','srch'));
	}
	public function Add(Request $req)
	{
		$cat = $req->input('id');

		$cats = new SerCat;
		$cats->categoryname = $cat;

		$cats->save();
		
		return redirect('/admin/Service_and_Category');

	}
	public function sersave(Request $req)
	{
		
		$case = $req->input('name');
		$case1 = $req->input('Snames');
		$case2 = $req->input('Pnames');

		$finalcase = new Service1;
		$finalcase->category = $case;
		$finalcase->servicename = $case1;
		$finalcase->price = $case2;

		$finalcase->save();
		return redirect('/admin/Service_and_Category/service');

	}
	public function DELETESSS($id)
	{
		Service1::where('id' ,'=', $id)->delete();
      
       
        return redirect('/admin/Service_and_Category');
	}
	public function Servupdate(Request $req)
	{
		$case = $req->input('name');
		$case1 = $req->input('Snames');
		$case2 = $req->input('Pnames');

		$updatesers = $req->input('updatesers');

		$serss = new Service1;
		$iaupdate = array('category' => $case, 'servicename' => $case1, 'price' => $case2);
		  $serss->where('id','=', $updatesers)->update($iaupdate);

		  return redirect('/admin/Service_and_Category');
	}
}