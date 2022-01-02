@extends('template.beranda')
@section('content')
<div class="container">
            <div class="row">
              <div class="col-md-12  col-xs-12">
                <div class="card" style="margin-top: 40px;">
                  <div class="card-header">
                    Tambah Data produk
                  </div>
                  <div class="card-body" >
                   <form action="{{url('admin/produk')}}" method="post" enctype="multipart/form-data">
                      @csrf
                     <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                         @include('utils.errors', ['item' => 'nama']);
                        <input type="text" class="form-control" name="nama"></input>
                     </div>
                     <div class="row">
                       <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">foto</label>
                              @include('utils.errors', ['item' => 'foto']);
                             <input type="file" class="form-control" name="foto" accept=".png"></input>
                          </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Stok</label>
                              @include('utils.errors', ['item' => 'stok']);
                             <input type="text" class="form-control" name="stok"></input>
                          </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Harga</label>
                              @include('utils.errors', ['item' => 'harga']);
                             <input type="text" class="form-control" name="harga"></input>
                           </div> 
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Berat</label>
                              @include('utils.errors', ['item' => 'berat']);
                             <input type="text" class="form-control" name="berat"></input>
                           </div> 
                        </div>
                     </div>
                      <div class="form-group">
                             <label for="" class="control-label">Deskripsi</label>
                             <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                         </div>
                     <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                  </div>
                </div>
              </div>  
            </div> 
          </div>
@endsection

@push('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
  $(document).ready(function() {
  $('#deskripsi').summernote();
});
</script>
@endpush