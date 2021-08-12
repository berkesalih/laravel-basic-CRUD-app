<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /*
 * <summary>
 * Bu kod bloğunda Kullanıcı işlemlerinin route yönlendirilmeleri gerçekleştirildi ve routelardan gelen post
     * işlemlerinden gelen verilerin alınması sağlandı.
 * </summary>
 *  */
    public function index()
    {
        $viewdata = Users::all();
        return view("user.index", compact("viewdata"));
    }

    public function add(Request $request)
    {
        $user = new Users;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->uname = $request->uname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->mpno = $request->mbphone;
        $user->status = $request->status ? 1 : 0;
        $user->save();
        return redirect()->route("admin.user.index");
    }

    public function edit($edit = null)
    {
        if ($edit) {
            $viewdata_ = Users::where("id", $edit)->get();
        } else {
            $viewdata_ = 0;
        }

        return view("user.edit", compact("viewdata_"));
    }
    public function update(Request $request,$edit){
        $user = Users::find($edit);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->uname = $request->uname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->mpno = $request->mbphone;
        $user->status = $request->status ? 1 : 0;
        $user->save();
        return redirect()->route("admin.user.index");
    }
    public function delete($delete){
        Users::destroy($delete);
        return redirect()->route("admin.user.index");
    }
}
