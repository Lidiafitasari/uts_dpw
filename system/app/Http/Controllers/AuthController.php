<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller{
		function showLogin(){
		return view('login1');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('admin')->with('success', 'login berhasil');
		}else{
			return redirect('login1')->with('denger', 'login gagal, silahkan cek email dan password anda'); 
		}
	}
	function logout(){
		Auth::logout();
		return redirect('Dashboard');
	}
	function showregister(){
		return view('register1');
	}

	function registerProcess(){
		$user = new User;
		$user->username = request('username');
		$user->nama = request('nama');
		$user->password = request('password');
		$user->email = request('email');
		$user->save();

		return redirect('login1');
	}

}