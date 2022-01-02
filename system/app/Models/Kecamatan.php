<?php

namespace App\Models;

use App\Models\Desa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model {
	protected $table = 'kecamatan';

	function desa(){
		return $this->hasMany(Desa::class, 'id_desa');
	}

	function kabupaten(){
		return $this->belongsTo(Kabupaten::class, 'id_kabupaten');
	}

}