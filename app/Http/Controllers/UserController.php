<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class UserController extends Controller
{
    public function users()
    {
        $data['active_class']= "user";
        $data['getRecord'] = User::getRecordUser();
        return view('backend.user.list', $data);
    }
    public function add_user()
    {
        $data['active_class']="user";
        return view('backend.user.add',$data);
    }
    public function insert_user(Request $request)
    {
        request()->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password' =>'required',
            'cpassword' =>'required'
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->status = trim($request->status);
        if ($request->password == $request->cpassword) {
            $user->password = Hash::make($request->password);
        } else {
            return back()->with('error', 'Password and Confirm Password do not Match!');
        }
        $user->save();

        return redirect('panel/user/list')->with('success', 'User Successfully Created!');
    }

    public function edit_user($id)
    {
        $data['active_class']="user";
        $data['getRecord'] = User::getSingle($id);
        return view('backend.user.edit', $data);
    }
    public function update_user($id, Request $request)
    {
        request()->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email,'.$id,

        ]);

        $user = User::getSingle($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->status = trim($request->status);
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect('panel/user/list')->with('success', 'User Updated Successfully');
    }

    public function delete_user($id)
    {
        $user = User::getSingle($id);

        $user->is_delete = 1;

        $user->save();
        return redirect('panel/user/list')->with('success', 'User Deleted Successfully');
    }

}
