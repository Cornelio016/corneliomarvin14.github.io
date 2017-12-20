<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\backendController;
use App\Transaction;
use Illuminate\Http\Request;  
use App\Products;
use DB;
use App\Staff;
use App\service;
use App\CustomerRecord;
use App\Service1;
use App\finaltrans;
use App\Gtotal;
use App\transhistory;   
use App\serviceface;
use App\servicehairstyle;
use App\servicehaircolor;
use App\servicenailcare;
use App\servicehairtreatment;
use App\servicespa;
use App\servicewaxing;
use App\servicesenseskids;
use Illuminate\Support\Facades\Auth;

class TransactionController extends backendController
{
	public function Transaction(Request $req)
  {
        $transhistory = new transhistory;
        $name = $req->input('pogi');
        $price = $req->input('pogiako');
        $transid = $req->input('transid');
        $category = $req->input('category');
        $dt = $req->input('date');
        $x = 1;
       foreach (array_combine($name, $price) as $names => $prices) {
            $saves = array('trans_number'=>$transid, 'item_number'=>$x, 'servicename'=>$names, 'price' => $prices, 'category' => $category, 'Branch' => Auth::User()->branch, 'date' => $dt);
            $transhistory->insert($saves);
            $x++;
       }

       
       return back();
 }
  
  
  public function Transac(Request $require){

    $Cus = CustomerRecord::all();
    $service = Service::all();
    $staf = Staff::all();
    $Prs = Products::all();
	$trans = Transaction::all();
     $Transac = $require->input('transas');

    $trans = Transaction::where('trans_num', 'like', '%' .$Transac. '%')->orwhere('branchname', 'like', '%' .$Transac. '%')->get();

	return view ('backend.Transaction', compact('trans', 'Prs', 'staf', 'service', 'Cus'));
	}
    
    
	public function update(Request $req)
	{
		$name = $req->input('name');
        $product = $req->input('productss');
        $prod = $req->input('products');
        $quan = $req->input('quantity');
        $ser = $req->input('service');
        $emp = $req->input('employes');
       
        $tot = $req->input('total');

        $TRANSACTION = $req->input('TRANSACTION');

        $trans = new Transaction;
        $iaupdate = array('name' => $name, 'products_name' => $product, 'products_use' => $prod, 'quantity_products' => $quan, 'service_take' => $ser ,'employes_take' => $emp,'total_price' => $tot);
        $trans->where('id','=', $TRANSACTION)->update($iaupdate);

        return redirect ('/admin/Transaction'); 
	}

	public function DELETES($id){

         Transaction::where('id' ,'=', $id)->delete();
      
       
        return redirect('/admin/Transaction');

    }	
    public function DropSer(Request $req)
    {
        $tangina = new transhistory;
        $Ser1 = new Service1;
        $Ser1 = Service1::all();
        $ser = finaltrans::all();
        $tangina = transhistory::all();
        $srchss = $req->input('searchsser');

        $srchs = Service1::where('category','like','%'.$srchss.'%')->get();

        return view ('backend.Transaction', compact('Ser1', 'srchs', 'ser','tangina'));
    }
    public function finalsave(Request $req)
    {
        $sum = $req->input('sum');
        $money = $req->input('money');
        $change = $req->input('change');

        $ftotal = new Gtotal;
        $ftotal->total = $sum;
        $ftotal->money = $money;
        $ftotal->change = $change;

        $ftotal->save();
        return redirect ('/admin/Transaction');
    }

    public function face()
    {
        $face = new serviceface;
        $hairstyle = new servicehairstyle;
        $haircolor = new servicehaircolor;
        $nailcare = new servicenailcare;
        $hairtreatment = new servicehairtreatment;
        $spa = new servicespa;
        $waxing = new servicewaxing;
        $senseskids = new servicesenseskids;
        $face = serviceface::all();
        $hairstyle = servicehairstyle::all();
        $haircolor = servicehaircolor::all();
        $nailcare = servicenailcare::all();
        $hairtreatment = servicehairtreatment::all();
        $spa = servicespa::all();
        $waxing = servicewaxing::all();
        $senseskids = servicesenseskids::all();

        return View('backend.Transaction', compact('face', 'hairstyle', 'haircolor', 'nailcare', 'hairtreatment', 'spa', 'waxing', 'senseskids'));
    }

  

}