@extends('template.beranda')
@section('content')
      <section class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    Tambah Data User
                  </div>
                  <div class="card-body" >
                   <form action="{{url('admin/user')}}" method="post">
                      @csrf
                        <div class="form-group">
                          <label for="" class="control-label">Nama</label>
                          @include('utils.errors', ['item' => 'nama']);
                          <input type="text" class="form-control" name="nama"></input>
                        </div>
                        <div class="form-group">
                          <label for="" class="control-label">Username</label>
                            @include('utils.errors', ['item' => 'username']);
                          <input type="text" class="form-control" name="username"></input>
                        </div>
                         <div class="form-group">
                          <label for="" class="control-label">Email</label>
                            @include('utils.errors', ['item' => 'email']);
                          <input type="email" class="form-control" name="email"></input>
                        </div>
                        <div class="form-group">
                          <label for="" class="control-label">Password</label>
                            @include('utils.errors', ['item' => 'password']);
                          <input type="password" class="form-control" name="password"></input>
                        </div>
                         <div class="form-group">
                          <label for="" class="control-label">No Hp</label>
                            @include('utils.errors', ['item' => 'no_handphone']);
                          <input type="text" class="form-control" name="no_handphone"></input>
                        </div>
                     <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                  </div>
                </div>
              </div>  
            </div> 
          </div>
        </section>
@endsection