@extends('client.base')
@section('content')
        
<div class="container">
  <div class="container">
    <div class="container-fuild">
      <div class="row">      
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Alamat Pengiriman
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <label for="" class="control-label">Provinsi</label>
                  <select name="" class="form-control" onchange="gantiProvinsi(this.value)">
                    <option value="">Pilih Provinsi</option>
                    @foreach($list_provinsi as $provinsi)
                      <option value="{{$provinsi->id}}">{{$provinsi->name}}</option> 
                    @endforeach
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="" class="control-label">Kabupaten/Kota</label>
                  <select name="" class="form-control" onchange="gantiKabupaten(this.value)">
                    <option value="">Pilih Kabupaten</option>
                    @foreach($list_kabupaten as $kabupaten)
                      <option value="{{$kabupaten->id}}">{{$kabupaten->name}}</option> 
                    @endforeach
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="" class="control-label">Kecamatan</label>
                  <select name="" class="form-control" onchange="gantiKecamatan(this.value)">
                    <option value="">Pilih Kecamatan</option>
                    @foreach($list_kecamatan as $kecamatan)
                      <option value="{{$kecamatan->id}}">{{$kecamatan->name}}</option> 
                    @endforeach
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="" class="control-label">Desa</label>
                  <select name="" class="form-control" onchange="gantiDesa(this.value)">
                    <option value="">Pilih Desa</option>
                    @foreach($list_desa as $desa)
                      <option value="{{$desa->id}}">{{$desa->name}}</option> 
                    @endforeach
                  </select>
                </div>
                 <div class="col-md-12 mt-3">
                    <label for="" class="control-label">Deskripsi Alamat</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12  col-xs-12">
      <div class="card" style="margin-top: 30px; margin-bottom: 60px">
        <div class="card-header">
          Produk yang dipesan
        </div>
        <div class="card-body" >
           <div class="form-group">
              <label for="" class="control-label">Nama Produk</label>
              <input type="text" class="form-control" name="nama"></input>
           </div>
           <div class="row">
            <div class="col-md-3">
               <div class="form-group">
                 <label for="" class="control-label">Jumlah</label>
                 <input type="text" class="form-control" name="stok"></input>
              </div>
            </div>
            <div class="col-md-3">
               <div class="form-group">
                 <label for="" class="control-label">Harga</label>
                 <input type="text" class="form-control" name="harga"></input>
               </div> 
            </div>
            <div class="col-md-3">
               <div class="form-group">
                 <label for="" class="control-label">Ukuran</label>
                 <input type="text" class="form-control" name="ukuran"></input>
               </div> 
            </div>
         </div>
       <button class="btn btn-warning float-right"><a href="{{url('index')}}"><i class="fa fa-shopping-cart"></i> Checkout</a></button>
      </div>
    </div>
  </div>  
</div> 


  
        

   
 


@endsection



