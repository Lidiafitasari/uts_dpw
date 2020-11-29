<?php
namespace App\Http\Controllers;

class HomeController extends Controller{
	function showHome(){
		return view('home');
	}
	function showblog(){
		return view('artikel');
	}
	function showAdmin(){
		return view('admin.base');
	}

}