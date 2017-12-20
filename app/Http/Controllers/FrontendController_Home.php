<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use App\layout; 
use App\subscribe;
use App\count;
use App\Events;
use App\serviceface;
use App\servicehairstyle;
use App\servicehaircolor;
use App\servicenailcare;
use App\servicehairtreatment;
use App\servicespa;
use App\servicewaxing;
use App\servicesenseskids;





class FrontendController_Home extends FrontendController
{
	public function index()
	{   
      $count = count::first();


      $webcount = $count->count + 1;
      $count->count = $webcount; 

      $count->save();
      $newss = new Events;
      $newss = Events::all();
      $face = new serviceface;
      $face = serviceface::all();
      $hairstyle = new servicehairstyle;
      $hairstyle = servicehairstyle::all();
      $haircolor = new servicehaircolor;
      $haircolor = servicehaircolor::all();
      $nailcare = new servicenailcare;
      $nailcare = servicenailcare::all();
      $hairtreatment = new servicehairtreatment;
      $hairtreatment = servicehairtreatment::all();
      $spa = new servicespa;
      $spa = servicespa::all();
      $waxing = new servicewaxing;
      $waxing = servicewaxing::all();
      $senseskids = new servicesenseskids;
      $senseskids = servicesenseskids::all();


      return View('frontend.home', compact('count', 'newss', 'face', 'hairstyle', 'haircolor', 'nailcare', 'hairtreatment', 'spa', 'waxing', 'senseskids'));
	}

	public function homeservice(Request $req)
	{
		 $name = $req->input('name');
       $address = $req->input('address');
       $email = $req->input('email');
       $cell = $req->input('polnum');

        $New = new layout;
      
         $New->name = $name;
         $New->address = $address;
         $New->Email = $email;
         $New->cellnum = $cell;

         $New->save();

         return redirect ('/');
	}

  public function View()

  {
    
    
    $New = layout::all();
    $Subs = Subscribe::all();
   
    return View('backend.homeservice', compact('New'));
  }
  public function subscribe(Request $req)
  {
    $name = $req->input('name');
    $email = $req->input('email');

    $Subs = new subscribe;

    $Subs->name = $name;
    $Subs->email  = $email;

    $Subs->save();

    return redirect('/');
  }
  public function Views( )
  {
    $Subs = Subscribe::all();
    return View('backend.subscribe', compact('Subs'));
  }
  public function Counter()
  {
    $count = count::all();
    return view('backend.admindashboard', compact('count'));
  }




}