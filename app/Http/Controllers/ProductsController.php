<?php

namespace App\Http\Controllers;
use View;
use App\Http\Controllers\backendController;
use App\Products;
use Illuminate\Http\Request;
use App\Staff;  




class ProductsController extends backendController
{
	public function Products(Request $req)
	{ 
        $id =$req->input('id');
        $name = $req->input('name');
        $buy = $req->input('buy');
         $quantity = $req->input('Quan');
         $price = $req->input('Price');
         $added_by = $req->input('Added');
         $Crit = $req->input('Critical');
         $Out = $req->input('Out');


       $Prs = new Products;

       $Prs->id = $id;
         $Prs->proname = $name;
         $Prs->quantity = $quantity;
         $Prs->price = $price;
         $Prs->added_by = $added_by;
         $Prs->Critical_Stage = $Crit;
        $Prs->Out_of_Stock = $Out;

        $Prs->save();
        
     

        return redirect('/admin/Products');
	}
	public function Prod(Request $require){


        $staf = Staff::all();
		$Prs = Products::all();

            $Pro=$require->input('Pro');
        
        $srch= Products::where('id','like','%'.$Pro.'%')->orwhere('proname','like','%'.$Pro.'%')->orwhere('quantity', 'like', '%' .$Pro.'%')->orwhere('price', 'like', '%' .$Pro.'%')->get();

       
    		return view ('backend.Products', compact('staf', 'srch'));



	}

   

    public function update(Request $req)
    {
        $name = $req->input('name');
         $quantity = $req->input('Quan');
         $price = $req->input('Price');
         $added_by = $req->input('Added');
         $Crit = $req->input('Critical');
         $Out = $req->input('Out'); 

         $Productss = $req->input('Productss');

          $Prs = new Products;
          $iaupdate = array('proname' => $name, 'quantity' => $quantity, 'price' => $price, 'added_by' => $added_by, 'Critical_Stage' => $Crit ,'Out_of_Stock' => $Out);
          $Prs->where('id','=', $Productss)->update($iaupdate);


        

        return redirect ('/admin/Products'); 
    }

    public function DELETE($id){

         Products::where('id' ,'=', $id)->delete();
      
       
        return redirect('/admin/Products');

    }




}