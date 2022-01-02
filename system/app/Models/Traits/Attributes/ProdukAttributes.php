<?php 
namespace App\Models\Traits\Attributes;

use App\Models\User;
use Illuminate\Support\Str;

trait ProdukAttributes {


function getHargaAttribute(){
		return  "Rp.".number_format($this->attributes['harga']);
	}

	function handleUploadFoto(){
		if(request()->hasFile('foto')){
			$foto = request()->file('foto');
			$destination = "images/produk";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."_".$randomStr.".".$foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/".$url;
			$this->save();
		
		}
	}

	function handleDelete(){
		$foto = $this->foto;
		$path = public_path($foto);
		if(file_exists($path)){
			 unlink($path);
		}
		return true;
	}

}