          @extends('template.beranda')
          @section('content')
          <div class="container">
            <div class="row">
              <div class="col-md-11">
                <div class="row">
                  <div class="col-md-12">
                    @include('utils.notif')
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                  Data User
                  <a href="{{url('admin/user/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus ml-2"></i> tambah data</a>
                  </div>
                  <div class="card-body">
                    <table class="table">
                        <thead>
                           <th>No</th>
                           <th>Aksi</th>
                           <th>Username</th>
                           <th>Nama</th>
                           <th>Jenis Kelamin</th>
                           <th>Email</th>
                        </thead>
                        <tbody>
                            @foreach($list_user as $user)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                              <div class="btn-group">
                                <a href="{{ url('admin/user', $user->id) }}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                <a href="{{ url('admin/user', $user->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                               @include('utils.delete',['url' => url('admin/user', $user->id)])
                            </td>
                                <td>{{$user->username}}</td>
                                <td> {{$user->nama}} </td>
                                <td>{{$user->jenis_kelamin_string}}</td>
                                <td>{{$user->email}}</td>
                             </div>
                          </tr>
                          @endforeach
                        </tbody>
                    </table> 
                  </div>
                </div>
              </div>  
            </div> 
          </div>
          @endsection