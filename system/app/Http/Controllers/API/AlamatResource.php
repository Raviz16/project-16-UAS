<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kabupaten;
use App\Models\Produk;
use Illuminate\Http\Request;

class AlamatResource extends Controller
{
    function getKabupaten($id_provinsi){
        return Kabupaten::where("id_provinsi", $id_provinsi)->get()->toJson();
    }

}
