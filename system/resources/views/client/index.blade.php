 @extends('client.base')
@section('content')

 <div class="product-area pt-60 pb-50">
  <div class="container">
    <div id="produk" class="our-team-area area-padding">
      <div class="container-fuild">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Produk</h2>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-3">
            <form action="{{url('filter')}}" method="post">
              @csrf
                <div class="card">
                    <div class="card-header">
                      Filter
                    </div>
                    <ul class="list-group list-group-flush col-12">
                      <li class="list-group-item">
                          <label for="" class="control label">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{$nama ?? ''}}">
                      </li>
                      <li class="list-group-item">
                          <label for="" class="control label">Stok</label>
                      <input type="text" class="form-control" name="stok" value="{{$stok ?? ''}}">
                      </li>
                      <li class="list-group-item ">
                          <div class="row">
                          <div class="col-6">
                            <label for="" class="control label">Harga Min</label>
                          <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ''}}">
                          </div>
                          <div class="col-6">
                           <label for="" class="control label">Harga Max</label>
                          <input type="text" class="form-control" name="harga_max"  value="{{$harga_max ?? ''}}">
                          </div>
                        </div>
                      </li>
                    </ul>
                      <li class="list-group-item">
                      <center>   <button class="btn btn-dark"><i class="fa fa-search"></i> Filter</button> </center>
                      </li>
                 </div>
                
            </form>
          </div>
          <div class="col-9">
              <div class="row row-cols-1 row-cols-md-2">
              @foreach($list_produk as $produk)
                <div class="col mb-4">
                  <div class="card h-100">
                 
                <img src="{{url("system/public/$produk->foto")}}" alt="" class="img-fluid">
        
                    <div class="card-body">
                      <h5 class="card-title">{{$produk->nama}}</h5>
                      <p class="card-text">
                        Harga Produk : {{$produk->harga}} | Stok Tersedia : {{$produk->stok}} <br>
                      
                      </p>
                    </div>
                    <div class="card-footer">
                     <center><a href="{{url('beli')}}" class="btn btn-warning"><b>BELI</b> <i class="fa fa-shopping-cart"></i></a></center>
                    </div>
                  </div>
                </div>
              @endforeach
              </div>
               <div class="row">
            <div class="col-md-12 mt-4">
              <div class="d-flex justify-content-center">
                {!! $list_produk->links() !!}
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>          
   </div>
</div>
@endsection