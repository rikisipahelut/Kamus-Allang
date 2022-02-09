<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function form_login(){
        if (session('gotodashboardadmin')) {
            return redirect('/admin/dashboard');
        }
        return view('admin.login');
    }
    public function login(Request $request){
        
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $user=DB::table('akun')
        ->where('username',$request->username)
        ->where('password',$request->password)
        ->first();
        if($user){
                Auth::guard('login')->loginUsingId($user->id);
                session(['gotodashboardadmin'=>true,'username'=>$user->username]);
                return redirect('/admin/dashboard');
        }else{
            return back()->with('status','Login Gagal');
        }


    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
