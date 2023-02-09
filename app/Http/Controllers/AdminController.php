<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manage()
    {
        $user = User::all();
        return view('admin.manage', [
            'title' => 'Account Maintenance',
            'users' => $user
        ]);
    }

    public function deleteProductAdmin(User $user){
        // dd($product);
        // dd($request->all(), $product);
        $this->authorize('admin');
        //cara 1
        // $product->delete();
        // return redirect('/manage')->with('success', 'Product Successfully Deleted!');

        //cara 2
        User::destroy($user->UserID);
        return redirect('/manage')->with('success', 'Account Successfully Deleted!');
    }

    public function updateRole(Request $request, User $user)
    {
        // dd($request);
        $request->validate([
            'RoleID' => 'required',
        ]);
        $user = User::find($user->UserID);
        $user->RoleID = $request->RoleID;
        $user->save();
        return redirect('/manage')->with('success', 'Account Updated!');
    }
}
