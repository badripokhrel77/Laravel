<?php

namespace App\Http\Controllers;
// use app\Models\User;

use App\Models\User;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function store(Request $request)
    {

        $user =new User();
        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->address = $request->address;
        $user->ph = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/login');
    }

    public function destroy($id)
    {
       $User=user::find($id);
       $User->delete();
       return back();
    }

    public function edit($id)
    {
        $User=user::find($id);
        return view('edit',compact('User'));
    }

    public function update(Request $request,$id)
    {
        $user= User::find($id);
        $user->f_name=$request->f_name;
        $user->l_name=$request->l_name;
        $user->address=$request->address;
        $user->ph=$request->phone;
        $user->email=$request->email;
        $user->save();
        return redirect('/userdetails');
        

    }
}
