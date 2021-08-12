<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*
 * <summary>
 * Bu kod bloğunda Ürün işlemlerinin route yönlendirilmeleri gerçekleştirildi ve routelardan gelen post
     * işlemlerinden gelen verilerin alınması sağlandı.
 * </summary>
 *  */
    public function index()
    {
        $viewdata = Products::all();
        return view("product.index", compact("viewdata"));
    }

    public function edit(Request $request, $edit = null)
    {
        if ($edit) {
            $viewdata_ = Products::where("id", $edit)->get();
        } else {
            $viewdata_ = 0;
        }

        return view("product.edit", compact("viewdata_"));
    }
    public function add(Request $request)
    {
        $product = new Products;
        $product->product_unicode = $request->unicode;
        $product->user_id = 1;
        $product->product_title = $request->catname;
        $product->product_description = $request->desc;
        $product->product_order = $request->order;
        $product->product_status = $request->status ? 1 : 0;
        $product->product_prc = $request->prc;
        $product->product_cid = $request->cid;
        $product->product_slug = $request->catname;
        $product->save();
        return redirect()->route("admin.product.index");
    }
    public function update(Request $request,$edit){

        $product = Products::find($edit);
        $product->product_unicode = $request->unicode;
        $product->user_id = 1;
        $product->product_title = $request->catname;
        $product->product_description = $request->desc;
        $product->product_order = $request->order;
        $product->product_status = $request->status ? 1 : 0;
        $product->product_prc = $request->prc;
        $product->product_cid = $request->cid;
        $product->product_slug = $request->catname;
        $product->save();
        return redirect()->route("admin.product.index");
    }
    public function delete($delete){
        Products::destroy($delete);
        return redirect()->route("admin.product.index");
    }
}
