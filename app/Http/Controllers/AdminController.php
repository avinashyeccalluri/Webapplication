<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Admin;

class AdminController extends Controller
{
    
    public function index(){
        return view ('Admin.index');
    }
    public function signup(){
        return view ('Admin.signup');
    }
    public function storesignup(Admin $admin,Request $request){
        request()->validate([
            'name'=>['required','max:10','min:3','alphaNum'],
            'email'=>['required','max:30','min:3','alphaNum'],
            'password'=>['required','max:10','min:3','alphaNum']
        ]);
        $request->merge(['password' => Hash::make($request->password)]);
        $admin->create(request('name','email','password'));
        return redirect('/admin');
    }
}
