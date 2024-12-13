<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    //admin list to show in admin panel
    public function adminList()
    {
       $admins = User::where('role','admin')->paginate(5);
       return view('admin.adminFolder.adminList', compact('admins'));
    }

    //detail of admin depend on id
    public function adminDetail($id)
    {
      $admin = User::where('id',$id)->first();
      return view('admin.adminFolder.adminDetail',compact('admin'));
    }

    //demote the admin to user depend on id
    public function deUser($id)
    {
        User::where('id',$id)->update([
            'role'=> 'user'
        ]);
        return back()->with(['success' => 'Admin has been successfully Demoted to User!']);
    }

    //delete the admin
    public function adminDele($id)
    {
        User::where('id',$id)->delete();
        return back()->with(['success' => 'Admin has been successfully deleted!']);
    }
}
