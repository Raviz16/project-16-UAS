          @extends('template.beranda')
          @section('content')
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    Edit Data User
                  </div>
                  <div class="card-body" >
                   <form action="{{url('admin/user', $user->id)}}" method="post">
                      @csrf
                      @method("PUT")
                    <div class="form-group">
                          <label for="" class="control-label">Nama</label>
                          <input type="text" class="form-control" name="nama" value="{{ $user->nama}}"></input>
                        </div>
                        <div class="form-group">
                          <label for="" class="control-label">Username</label>
                          <input type="text" class="form-control" name="username" value="{{ $user->username}}"></input>
                        </div>
                         <div class="form-group">
                          <label for="" class="control-label">Email</label>
                          <input type="email" class="form-control" name="email" value="{{ $user->email}}"></input>
                        </div>
                        <div class="form-group">
                          <label for="" class="control-label">Password</label>
                          <input type="password" class="form-control" name="password"></input>
                        </div>
                         <div class="form-group">
                          <label for="" class="control-label">No Hp</label>
                          <input type="text" class="form-control" name="no_handphone"></input>
                        </div>

                     <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                  </div>
                </div>
              </div>  
            </div> 
          </div>
          @endsection