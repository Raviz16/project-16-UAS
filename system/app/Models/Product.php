<?php

namespace App\Models;

use App\Models\User;
use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;
use Illuminate\Support\Str;


class product extends Model {
	use ProdukAttributes,ProdukRelations;

	protected $table = 'product';

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'berat' => 'decimal:2'

	];

	protected static function boot(){
		parent::boot();

		static::creating(function($item){
			$item->uuid = (string) Str::uuid();
		});
	}
}