<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('site/login');
    }

    public function login(Request $request){

        $dados= $request->all();
        if(Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])){
            return redirect()->route('admin.home');
        }
            return redirect()->route('painel.login');

    }

    public function logout(){

        Auth::logout();
        return redirect()->route('site.home');
    }
}
