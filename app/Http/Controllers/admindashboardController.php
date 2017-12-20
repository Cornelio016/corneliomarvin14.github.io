<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\backendController;
use App\Tungko;
use Illuminate\Http\Request;  
use App\transhistory;
use App\count;
use Illuminate\Support\Facades\Auth;

class admindashboardController extends backendController
{
	public function admindash()
	{
		//Road1
		$facenilovely = transhistory::where('category','=','Face')->count();
		$hairstylingnilovely = transhistory::where('category','=','Hairstyling')->count();
		$haircolornilovely = transhistory::where('category', '=' , 'haircolor')->count();
		$nailcares = transhistory::where('category', '=' , 'nailcare')->count();
		$hairtreatments = transhistory::where('category', '=' , 'hairtreatment')->count();
		$spas = transhistory::where('category', '=' , 'spamassage')->count();
		$waxings = transhistory::where('category', '=' , 'waxing')->count();
		$senseskids = transhistory::where('category', '=' , 'senseskids')->count();
		$count = count::first();
		//Tungko
		$Face = transhistory::where('category','=','Face')->where('Branch', '=', 'Tungko')->count();
		$hairstyling = transhistory::where('category','=','Hairstyling')->where('Branch', '=', 'Tungko')->count();
		$haircolor = transhistory::where('category', '=' , 'haircolor')->where('Branch', '=', 'Tungko')->count();
		$nailcaress = transhistory::where('category', '=' , 'nailcare')->where('Branch', '=', 'Tungko')->count();
		$hairtreatmentss = transhistory::where('category', '=' , 'hairtreatment')->where('Branch', '=', 'Tungko')->count();
		$spass = transhistory::where('category', '=' , 'spamassage')->where('Branch', '=', 'Tungko')->count();
		$waxingss = transhistory::where('category', '=' , 'waxing')->where('Branch', '=', 'Tungko')->count();
		$senseskidss = transhistory::where('category', '=' , 'senseskids')->where('Branch', '=', 'Tungko')->count();
		//Sampol
		$Facesampol = transhistory::where('category','=','Face')->where('Branch', '=', 'Sampol')->count();
		$hairstylingsampol = transhistory::where('category','=','Hairstyling')->where('Branch', '=', 'Sampol')->count();
		$haircolorsampol = transhistory::where('category', '=' , 'haircolor')->where('Branch', '=', 'Sampol')->count();
		$nailcaresssampol = transhistory::where('category', '=' , 'nailcare')->where('Branch', '=', 'Sampol')->count();
		$hairtreatmentsssampol = transhistory::where('category', '=' , 'hairtreatment')->where('Branch', '=', 'Sampol')->count();
		$spasssampol = transhistory::where('category', '=' , 'spamassage')->where('Branch', '=', 'Sampol')->count();
		$waxingsssampol = transhistory::where('category', '=' , 'waxing')->where('Branch', '=', 'Sampol')->count();
		$senseskidsssampol = transhistory::where('category', '=' , 'senseskids')->where('Branch', '=', 'Sampol')->count();

		if($facenilovely > $hairstylingnilovely){
			$transhistory = "Face";
		}else{
			$transhistory = "Hairstyling";
		}
		
		return view ('backend.admindashboard', compact('facenilovely', 'count', 'transhistory','hairstylingnilovely', 'haircolornilovely', 'nailcares', 'hairtreatments', 'spas', 'waxings', 'senseskids', 'Face', 'hairstyling', 'haircolor', 'nailcaress', 'hairtreatmentss', 'spass', 'waxingss', 'senseskidss', 'Facesampol', 'hairstylingsampol', 'haircolorsampol', 'nailcaresssampol', 'hairtreatmentsssampol', 'spasssampol', 'waxingsssampol', 'senseskidsssampol'));
	}

	public function Road1(Request $req)
	{

		$facenilovely = transhistory::where('category','=','Face')->where('Branch', '=', 'Road1')->count();
		$hairstylingnilovely = transhistory::where('category','=','Hairstyling')->where('Branch', '=', 'Road1')->count();
		$haircolornilovely = transhistory::where('category', '=' , 'haircolor')->where('Branch', '=', 'Road1')->count();
		$nailcares = transhistory::where('category', '=' , 'nailcare')->where('Branch', '=', 'Road1')->count();
		$hairtreatments = transhistory::where('category', '=' , 'hairtreatment')->where('Branch', '=', 'Road1')->count();
		$spas = transhistory::where('category', '=' , 'spamassage')->where('Branch', '=', 'Road1')->count();
		$waxings = transhistory::where('category', '=' , 'waxing')->where('Branch', '=', 'Road1')->count();
		$senseskids = transhistory::where('category', '=' , 'senseskids')->where('Branch', '=', 'Road1')->count();
		$count = count::first();

		

		return view('backend.road1dashboard', compact('facenilovely', 'count', 'transhistory','hairstylingnilovely', 'haircolornilovely', 'nailcares', 'hairtreatments', 'spas', 'waxings', 'senseskids'));
	}

	public function Tungko(Request $req)
	{
		$facenilovely = transhistory::where('category','=','Face')->where('Branch', '=', 'Tungko')->count();
		$hairstylingnilovely = transhistory::where('category','=','Hairstyling')->where('Branch', '=', 'Tungko')->count();
		$haircolornilovely = transhistory::where('category', '=' , 'haircolor')->where('Branch', '=', 'Tungko')->count();
		$nailcares = transhistory::where('category', '=' , 'nailcare')->where('Branch', '=', 'Tungko')->count();
		$hairtreatments = transhistory::where('category', '=' , 'hairtreatment')->where('Branch', '=', 'Tungko')->count();
		$spas = transhistory::where('category', '=' , 'spamassage')->where('Branch', '=', 'Tungko')->count();
		$waxings = transhistory::where('category', '=' , 'waxing')->where('Branch', '=', 'Tungko')->count();
		$senseskids = transhistory::where('category', '=' , 'senseskids')->where('Branch', '=', 'Tungko')->count();
		$count = count::first();
		return view('backend.tungkodashboard', compact('facenilovely', 'count', 'transhistory','hairstylingnilovely', 'haircolornilovely', 'nailcares', 'hairtreatments', 'spas', 'waxings', 'senseskids'));

	
	}
	public function Sampol(Request $req)
	{
		$facenilovely = transhistory::where('category','=','Face')->where('Branch', '=', 'Sampol')->count();
		$hairstylingnilovely = transhistory::where('category','=','Hairstyling')->where('Branch', '=', 'Sampol')->count();
		$haircolornilovely = transhistory::where('category', '=' , 'haircolor')->where('Branch', '=', 'Sampol')->count();
		$nailcares = transhistory::where('category', '=' , 'nailcare')->where('Branch', '=', 'Sampol')->count();
		$hairtreatments = transhistory::where('category', '=' , 'hairtreatment')->where('Branch', '=', 'Sampol')->count();
		$spas = transhistory::where('category', '=' , 'spamassage')->where('Branch', '=', 'Sampol')->count();
		$waxings = transhistory::where('category', '=' , 'waxing')->where('Branch', '=', 'Sampol')->count();
		$senseskids = transhistory::where('category', '=' , 'senseskids')->where('Branch', '=', 'Sampol')->count();
		$count = count::first();
		return view('backend.Sampoldashboard', compact('facenilovely', 'count', 'transhistory','hairstylingnilovely', 'haircolornilovely', 'nailcares', 'hairtreatments', 'spas', 'waxings', 'senseskids'));
	}
	public function road1anal()
	{
			$facenilovely = transhistory::where('category','=','Face')->where('Branch', '=', 'Road1')->count();
		$hairstylingnilovely = transhistory::where('category','=','Hairstyling')->where('Branch', '=', 'Road1')->count();
		$haircolornilovely = transhistory::where('category', '=' , 'haircolor')->where('Branch', '=', 'Road1')->count();
		$nailcares = transhistory::where('category', '=' , 'nailcare')->where('Branch', '=', 'Road1')->count();
		$hairtreatments = transhistory::where('category', '=' , 'hairtreatment')->where('Branch', '=', 'Road1')->count();
		$spas = transhistory::where('category', '=' , 'spamassage')->where('Branch', '=', 'Road1')->count();
		$waxings = transhistory::where('category', '=' , 'waxing')->where('Branch', '=', 'Road1')->count();
		$senseskids = transhistory::where('category', '=' , 'senseskids')->where('Branch', '=', 'Road1')->count();
		$count = count::first();

		

		return view('backend.road1graph', compact('facenilovely', 'count', 'transhistory','hairstylingnilovely', 'haircolornilovely', 'nailcares', 'hairtreatments', 'spas', 'waxings', 'senseskids'));
	}
	public function tungkoanal()
	{
		$facenilovely = transhistory::where('category','=','Face')->where('Branch', '=', 'Tungko')->count();
		$hairstylingnilovely = transhistory::where('category','=','Hairstyling')->where('Branch', '=', 'Tungko')->count();
		$haircolornilovely = transhistory::where('category', '=' , 'haircolor')->where('Branch', '=', 'Tungko')->count();
		$nailcares = transhistory::where('category', '=' , 'nailcare')->where('Branch', '=', 'Tungko')->count();
		$hairtreatments = transhistory::where('category', '=' , 'hairtreatment')->where('Branch', '=', 'Tungko')->count();
		$spas = transhistory::where('category', '=' , 'spamassage')->where('Branch', '=', 'Tungko')->count();
		$waxings = transhistory::where('category', '=' , 'waxing')->where('Branch', '=', 'Tungko')->count();
		$senseskids = transhistory::where('category', '=' , 'senseskids')->where('Branch', '=', 'Tungko')->count();
		$count = count::first();
		return view('backend.tungkograph', compact('facenilovely', 'count', 'transhistory','hairstylingnilovely', 'haircolornilovely', 'nailcares', 'hairtreatments', 'spas', 'waxings', 'senseskids'));

	}
	public function sapangpalayanal()
	{
		$facenilovely = transhistory::where('category','=','Face')->where('Branch', '=', 'Sampol')->count();
		$hairstylingnilovely = transhistory::where('category','=','Hairstyling')->where('Branch', '=', 'Sampol')->count();
		$haircolornilovely = transhistory::where('category', '=' , 'haircolor')->where('Branch', '=', 'Sampol')->count();
		$nailcares = transhistory::where('category', '=' , 'nailcare')->where('Branch', '=', 'Sampol')->count();
		$hairtreatments = transhistory::where('category', '=' , 'hairtreatment')->where('Branch', '=', 'Sampol')->count();
		$spas = transhistory::where('category', '=' , 'spamassage')->where('Branch', '=', 'Sampol')->count();
		$waxings = transhistory::where('category', '=' , 'waxing')->where('Branch', '=', 'Sampol')->count();
		$senseskids = transhistory::where('category', '=' , 'senseskids')->where('Branch', '=', 'Sampol')->count();
		$count = count::first();
		return view('backend.sapangpalay', compact('facenilovely', 'count', 'transhistory','hairstylingnilovely', 'haircolornilovely', 'nailcares', 'hairtreatments', 'spas', 'waxings', 'senseskids'));
	}

}
