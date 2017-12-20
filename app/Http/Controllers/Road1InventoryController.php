<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\backendController;
use App\InventoryRoad1;
use Illuminate\Http\Request;  


class Road1InventoryController extends backendController
{
	
		public function InventoryRoad1()
	{  
        $PrsRoad1 = InventoryRoad1::all();
        return view('backend.InventoryRoad1', compact('PrsRoad1'));
        
	}
	public function AddingProducts(Request $req)
    {
        $id =$req->input('id');
        $name = $req->input('name');
         $quantity = $req->input('Quan');
         $price = $req->input('Price');
         $added_by = $req->input('Added');
         $Crit = $req->input('Critical');
         $Out = $req->input('Out');


       $PrsRoad1 = new InventoryRoad1;

       $PrsRoad1->id = $id;
         $PrsRoad1->road1name = $name;
         $PrsRoad1->road1quantity = $quantity;
         $PrsRoad1->road1price = $price;
         $PrsRoad1->road1added_by = $added_by;
         $PrsRoad1->road1Critical_Stage = $Crit;
        $PrsRoad1->road1Out_ofStock = $Out;

        $PrsRoad1->save();
            return redirect('/manager/Road1');
     
    }

   
}