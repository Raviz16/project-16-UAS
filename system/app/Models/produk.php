<?php

namespace App\Models;

use App\Models\User;
use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;
use Illuminate\Support\Str;

class produk extends Model {
	use ProdukAttributes,ProdukRelations;

	protected $table = 'produk';
	protected $primarykey = 'id';
	

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'berat' => 'decimal:2'

	];

	protected static function boot(){
		parent::boot();

		static::creating(function($item){
			$item->id = (string) Str::id();
		});
	}
}
