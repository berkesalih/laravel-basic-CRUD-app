<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class CartController extends Controller
{
    /*
 * <summary>
 * Bu kod bloğunda Satış işlemlerinin route yönlendirilmeleri gerçekleştirildi ve routelardan gelen post
 * işlemlerinden gelen verilerin alınması sağlandı.
 * </summary>
 *  */
    public function index()
    {
        $viewdata = Sales::all();
        return view("cart.index", compact("viewdata"));
    }

    public function edit($edit = null)
    {
        if ($edit) {
            $viewdata_ = Sales::where("id", $edit)->get();
        } else {
            $viewdata_ = 0;
        }

        return view("cart.edit", compact("viewdata_"));
    }

    public function add(Request $request)
    {
        $cart = new Sales;
        $cart->product_id = $request->product_id;
        $cart->orid = $request->orid;
        $cart->code = $request->code;
        $cart->sales_prc = $request->sales_prc;
        $cart->sales_cid = $request->sales_cid;
        $cart->sales_date = now();
        $cart->save();
        return redirect()->route("cart.index");
    }
    public function update(Request $request,$edit){
        $cart = Sales::find($edit);
        $cart->product_id = $request->product_id;
        $cart->orid = $request->orid;
        $cart->code = $request->code;
        $cart->sales_prc = $request->sales_prc;
        $cart->sales_cid = $request->sales_cid;
        $cart->sales_date = now();
        $cart->save();
        return redirect()->route("cart.index");
    }
    public function delete($delete){
        Sales::destroy($delete);
        return redirect()->route("cart.index");
    }
}
