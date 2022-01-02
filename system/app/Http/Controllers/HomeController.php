<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Provinsi;

class HomeController extends Controller{

	function showberanda(){
		return view('template.beranda');
	}

	function showproduk(){
		return view('template.produk');
	}


	function client(){
		return view('client.client');
	}

		function test($produk){
			echo "Nama produk $produk";
	
	}

	function testAjax(){
		$data['list_provinsi'] = Provinsi::all();
		return view('test-ajax', $data);
	}
}