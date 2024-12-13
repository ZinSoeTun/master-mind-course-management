<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //normal user list to show in admin panel
    public function userList()
    {
       $users = User::where('role','user')->paginate(5);
       return view('admin.user.userList', compact('users'));
    }

    //detail of normal user depend on id
    public function userDetail($id)
    {
      $user = User::where('id',$id)->first();
      return view('admin.user.userDetail',compact('user'));
    }

    //promote the user to admin depend on id
    public function proAdmin($id)
    {
        User::where('id',$id)->update([
            'role'=> 'admin'
        ]);
        return back()->with(['success' => 'User has been successfully Promoted to Admin!']);
    }

    //delete the user
    public function userDele($id)
    {
        User::where('id',$id)->delete();
        return back()->with(['success' => 'User has been successfully deleted!']);
    }
}
