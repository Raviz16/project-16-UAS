<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Pembeli;
use App\Models\Penjual;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{

	function showlogin(){
		return view('template.login');
	}

	function loginProcess(){



		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
		 	$user = Auth::user();
		 	if($user->level == 1) return redirect('admin/beranda')->with('success', 'Login berhasil');
			if($user->level == 0) return redirect('beranda/pengguna')->with('success', 'Login berhasil');
		 } else {
		 	return back()->with('danger', 'Login anda gagal, mohon periksa email atau password anda!');
		 }
		

		// if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
		// 	return redirect('admin/beranda')->with('success', 'login berhasil');
		// }else {
		// 	return back()->with('danger', 'login gagal, silahkan cek email dan password anda'); 
		// }

		// $email = request('email');
		// $user = Pembeli::where('email', $email)->first();
		// if($user){
		// 	$guard = 'pembeli';
		// } else {
		// 	$user = Penjual::where('email', $email)->first();
		// 	if($user) {
		// 		$guard = 'penjual';
		// 	}else{
		// 		$guard = false;
		// 	}
		// }


		// if(!$guard) {
		// 	return back()->with('danger', 'Login Gagal, Email Tidak Ditemukan Di Database');
		// }else{
		// 	if(Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])){
		// 		return redirect("beranda/$guard")->with('success', 'Login Berhasil');
		// 	}else{
		// 		return back()->with('danger', 'Login Gagal, Silahkan cek email dan password Anda');
		// 	}
		// }

		// if(request('login_as') ==1){
		// 	if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])){
		// 	return redirect('beranda/pembeli')->with('success', 'Login Berhasil');
		// 	}else{
		// 		return back()->with('danger', 'Login Gagal, Silahkan cek email dan password Anda');
		// }
		// }else{
		// 	if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])){
		// 		return redirect('beranda/penjual')->with('success', 'Login Berhasil');
		// 	}else{
		// 		return back()->with('danger', 'Login Gagal, Silahkan cek email dan password Anda');
		// 	}

		// }

	}

	function logout(){
		Auth::logout();
		return redirect('admin/beranda');

	}


	function registrasi(){
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->login = request('login');
		$user->email = request('email');
		$user->password = request('password');
		$user->jenis_kelamin = 1;
		$user->save();

		$userDetail = new UserDetail;
		$userDetail->id_user = $user->id;
		$userDetail->no_handphone = request('no_handphone');
		$userDetail->save();


		return redirect('registrasi')->with('success', 'Data Berhasil Ditambahkan');


	}

	function store(){
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		
		$user->save();

		return redirect('login')->with('success', 'Data Berhasil Ditambahkan');
		
	}
}

	