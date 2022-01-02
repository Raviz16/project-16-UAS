<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\User;
use App\Models\ClientProduk;
use App\Models\Kabupaten;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\Desa;


class ClientProdukController extends Controller{

	function beli(){
		$data['list_provinsi'] = Provinsi::all();
		$data['list_kabupaten'] = Kabupaten::all();
		$data['list_kecamatan'] = Kecamatan::all();
		$data['list_desa'] = Desa::all();
		return view('client/beli', $data);
	}

	

	function index(){
		
		$data['list_produk'] = Produk::Paginate(4);
		return view('client/index', $data);

	}


	function create(Produk $produk){
		$data['produk'] = $produk;
		return view('client/beli', $data);
		

	}

	function store(Produk $produk){
		$data['produk'] = $produk;
		
		$beli = new ClientProduk;
		$beli->nama = request('nama');
		$beli->harga = request('harga');
		$beli->total = request('total');
		$beli->save();

		$produk->handleUploadFoto();

		return redirect('/')->with('success', 'Barang Berhasil di Masukkan ke Keranjang');
		

	}

	function show(ClientProduk $produk)
	{
		$data['list_keranjang'] = ClientProduk::all();
		return view('client/keranjang', $data);
	}

	function edit(ClientProduk $produk)
	{
		$data['produk'] = $produk;
		return view('client/edit', $data);
	}

	function update(ClientProduk $produk)
	{
	
		$produk->total = request('total');
		$produk->save();

		$produk->handleUploadFoto();

		return redirect('keranjang')->with('success','Barang Berhasil di Ubah pada Keranjang');
	}

	function destroy(ClientProduk $produk)
	{
		$produk->delete();

		return redirect('keranjang')->with('danger', 'Barang Berhasil di Hapus dari Keranjang');
	}


	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		// $data['list_produk'] = Produk::where('nama','like', "%$nama%")->get();
		// $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		$data['list_produk'] = Produk::whereNotIn('stok', [0])->where('nama','like', "%$nama%")->whereYear('created_at', '2020')->whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		

		return view('client/index', $data);	
	}


		public function testCollection(){
		$list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];
		$list_bike = collect($list_bike);
		$list_produk = Produk::all();

		//Sorting
		//Sort By Harga Terendah
		//dd(list_produk->sortBy('harga'));
		//Sort By Harga Tertinggi

		//Filter
		//$filtered = $list_produk->filter(function($item){
			//return $item->harga < 150000;
		//});
		//dd($filtered);

		//$sum = $list_produk->sum('stok');
		//dd($sum);

		$data['list'] = Produk::paginate(5);
		return view('index', $data);

		
		dd($list_bike, $collection, $list_produk);
	}

	function base(){
		return view('client.base');
	}

}
