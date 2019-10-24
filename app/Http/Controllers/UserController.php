<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use Hash;
use App\Books;

class UserController extends Controller
{    
    public function index(){
        return view ('User.index');
    }
    public function signup(){
        return view ('User.signup');
    }
    public function storesignup(User $User,Request $request){
        request()->validate([
            'name'=>['required','min:3','max:10'],
            'email'=>['required','min:3','max:50'],
            'password'=>['required','min:3','max:10','alphaNum'] 
        ]);
        $request->merge(['password' => Hash::make($request->password)]);
        $User->create(request(['name','email','password'])); 
        return redirect('/user');
    }
    public function authenticate(Request $request){
        $user_array=array(
            'name'=>$request->get('loginusername'),
            'password'=>$request->get('loginpassword')
        );
        if(Auth::attempt($user_array)){
            return view('User.loggedin');
        }
        else{
            return redirect ('/user')->with('error','Please provide the exact credentials');
        }
    }
    public function viewbooks(){
        $books=Books::all();
        return view('User.viewbooks',compact('books'));
    }
    public function purchasebooks(){
        return view ('User.purchasebooks');
    }
    public function logout(){
        Auth::logout();
        return redirect('/user');
    }
}
