<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getLogin()
    {
    	return view('login');
    }

    public function postLogin(Request $request)
    {
    	if (!\Auth::attempt(['email' => $request->email, 'password' => $request->password])){
    		return redirect()->back();
    	}

    	return redirect()->route('dashboardAdmin');
    }

    //----------------------------------------------------------------------

    public function getRegister()
    {
    	return view('register');
    }

    public function postRegister(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|max:25',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:6|confirmed'
    	]);

    	User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password)
    	]);

    	return redirect()->route('login');
    }

    public function logout()
    {
    	\Auth::logout();

    	return redirect()->route('login');
    }
}
