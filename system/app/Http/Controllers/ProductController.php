<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProdukController extends Controller{

	function index(){
		// $id_user = request()->user()->id;
		//$data['list_produk'] = produk::where('id_user', $id_user)->get();
		$user = request()->user();
		$data['list_produk'] = $user->produk;
		
		return view('produk.index', $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){
		
		$produk = new Product;
		$produk->id_user = request()->user()->id;
		$produk->nama = request('nama');
		$produk->stok = request('stok');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		$produk->handleUploadFoto();

		return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');
		
	}

	function show(Product $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}

	function edit(Product $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}

	function update(Product $produk){
		$produk->nama = request('nama');
		$produk->stok = request('stok');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();
		$produk->handleUploadFoto();

		return redirect('admin/produk')->with('warning', 'Data Berhasil Diupdate');	
	}

	function destroy(Product $produk){
		$produk->handleDelete();
		$produk->delete();

		return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');	
	}


	function filter(){
	$nama = request('nama');
	$stok = explode(",", request('stok'));
	$data['harga_min'] = $harga_min = request('harga_min');
	$data['harga_max'] = $harga_max = request('harga_max');
	// $data['list_produk'] = produk::where('nama', 'like', "%$nama%")->get();
	// $data['list_produk'] = produk::whereIn('stok', $stok)->get();
	// $data['list_produk'] = produk::whereBetween('harga', [$harga_min, $harga_max])->get();
	// $data['list_produk'] = produk::where('stok', '<>', $stok)->get();
	// $data['list_produk'] = produk::whereNotIn('stok', $stok)->get();
	//$data['list_produk'] = produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
	// $data['list_produk'] = produk::whereNull('stok')->get();
	// $data['list_produk'] = produk::whereNotNull('stok')->get();
	// $data['list_produk'] = produk::whereNotNull('stok')->get();
	//$data['list_produk'] = produk::whereDate('created_at', '2020-11-')->get();
	// $data['list_produk'] = produk::whereDate('created_at', '2020-11-13', '2020-11-15')->get();
	//$data['list_produk'] = produk::whereMonth('created_at', '19')->produk::whereYear('created_at', '2020')->get();
	//$data['list_produk'] = produk::whereTime('created_at', '08:31:37')->get();
	// $data['list_produk'] = produk::whereBetween('harga', [$harga_min, $harga_max])-> produk::whereYear('created_at', '2020')->get();
	// $data['list_produk'] = produk::whereBetween('harga', [$harga_min, $harga_max])-> produk::whereNotIn('stok', [750])-> produk::whereYear('created_at', '2020')->get();



	$data['nama'] = $nama;
	$data['stok'] = request('stok');

		return view('produk.index', $data);
	}

	public function testCollection(){
		$list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];
		$list_bike = collect($list_bike);
		$list_produk = Produk::all();
		
		//Sorting
		//Sort By Harga Terendah
		//dd(list_produk->sortBy('harga'));
		//Sort By Harga Tertinggi
		// dd($list_produk->sortByDesc('harga'));
		// return view('test-collection', $data);

		//Filter
		//$filtered = $list_produk->filter(function($item){
			//return $item->harga < 80000;
		//});
		//dd($filtered);

		//$sum = $list_produk->sum('stok');
		//dd($sum);

		//dd($list_bike, $collection, $list_produk);

		$data['list'] = Produk::paginate(5);
		return view('test-collection', $data);

		
		dd($list_bike, $collection, $list_produk);
	}

	

}

