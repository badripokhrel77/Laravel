<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    function home(){
        return view('home');
    }

    function contact(){
        return view('contact');
    }
    function login(){
        return view('loginForm');
    }
    function register(){
        return view('registerForm');
    }
    function book(){
        return view('booking');
    }
    function admin(){
        return view('admin');
    }

    function userdetails(){
        $users= User::orderBy('id','desc')->get();
        // where('id',' ')->where('name',' ')->where('ph',' ')->where('address',' ')->where('email',' ')->get();
        // dd($users);
        return view('userdetail',compact('users'));
    }
}
