<?php 

namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelController extends Controller{
	function index(){
		$data['list_artikel'] = Artikel::all();
		return view('artikel.index', $data);
	}

	function create(){
		return view('artikel.create');
	}

	function store(){
		$artikel = new Artikel;
		$artikel->judul = request('judul');
		$artikel->deskripsi = request('deskripsi');
		$artikel->save();

		return redirect('Artikel');
	}

	function show(Artikel $artikel){
		$data['artikel'] = $artikel;
		return view('artikel.show', $data);
	}

	function edit(Artikel $artikel){
		$data['artikel'] = $artikel;
		return view('artikel.edit', $data);
	}

	function update(Artikel $artikel){
		$artikel->judul = request('judul');
		$artikel->deskripsi = request('deskripsi');
		$artikel->save();

		return redirect('Artikel');
	}

	function destroy(Artikel $artikel){
		$artikel->delete();

		return redirect('Artikel');
	}
}