<?php

namespace App\Http\Controllers;

use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /*
 * <summary>
 * Bu kod bloğunda Kategori işlemlerinin route yönlendirilmeleri gerçekleştirildi ve routelardan gelen post
     * işlemlerinden gelen verilerin alınması sağlandı.
 * </summary>
 *  */
    public function index()
    {
        $viewdata = Category::all();
        return view("category.index", compact("viewdata"));
    }

    public function edit(Request $request, $edit = null)
    {
        if ($edit) {
            $viewdata_ = Category::where("id", $edit)->get();
        } else {
            $viewdata_ = 0;
        }

        return view("category.edit", compact("viewdata_"));
    }

    public function add(Request $request)
    {
        $category = new Category;
        $category->cat_title = $request->catname;
        $category->cat_description = $request->catdesc;
        $category->cat_status = $request->status ? 1 : 0;
        $category->cat_slug = $request->catname;
        $category->save();

        return redirect()->route("admin.category.index");
    }

    public function update(Request $request,$edit)
    {
        $category = Category::find($edit);
        $category->cat_title = $request->catname;
        $category->cat_description = $request->catdesc;
        $category->cat_status = $request->status ? 1 : 0;
        $category->cat_slug = $request->catname;
        $category->save();
        return redirect()->route("admin.category.index");
    }
    public function delete($delete){
        Category::destroy($delete);
        return redirect()->route("admin.category.index");
    }
}
