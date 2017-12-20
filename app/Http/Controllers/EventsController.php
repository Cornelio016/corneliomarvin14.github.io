<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\backendController;
use App\Events;
use Illuminate\Http\Request;  


class EventsController extends backendController
{
	public function Events(Request $req)
	{
		$des = $req->input('Events');
		$date = $req->input('bday');
		$dateex = $req->input('bdays');

		$news = new Events;

		$news->Description = $des;
		$news->date = $date;
		$news->dateexpired = $dateex;
		$news->save();
		return redirect ('/admin/Events');
	}

	public function Viewsss(Request $require)
	{
		$news = Events::all();

       $ent=$require->input('ent');
		$baliw = Events::where('date','like','%'.$ent.'%')->orwhere('dateexpired','like','%'.$ent.'%')->orwhere('Description', 'like', '%' .$ent.'%')->get();
		
		
		return view('backend.Events', compact('news', 'baliw'));
		
	}

	public function DELETESS($id)
	{
		Events::where('id' ,'=', $id)->delete();
      
       
        return redirect('/admin/Events');

	}
	public function eupdate(Request $req)
	{
		$des = $req->input('Events');
		$date = $req->input('bday');
		$dateex = $req->input('bdays');

		$Evts = $req->input('Evts');

		 $Events = new Events;
          $iaupdate = array('date' => $date, 'dateexpired' => $dateex, 'Description' => $des);
          $Events->where('id','=', $Evts)->update($iaupdate);

       return redirect('/admin/Events');

	}


}