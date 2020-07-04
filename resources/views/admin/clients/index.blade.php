@extends('back.master')

@section('title', 'Clients')

@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Clients</h1>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur distinctio veritatis dolorum est ab quas iusto dicta illum, tempore culpa omnis id, commodi, beatae reiciendis atque esse debitis laborum odio?</p>
            @if (session()->has('added'))
            <div class="alert alert-success">
                {{ session()->get('added') }}
            </div>
            @endif
            @if (session()->has('delete'))
            <div class="alert alert-danger">
                {{ session()->get('delete') }}
            </div>
            @endif
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List of Clients</h6>
              <a href="{{ route('client.create')}}" class="btn btn-light"><h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus-circle"></i>&nbsp;Add Client</h6></a>
              </div>
              <div class="card-body text-left">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                      <tr>
                        <th>#</th>
                        <th>Name Client</th>
                        <th>Product</th>
                        <th>Location</th>
                        <th>Age</th>
                        <th >Date of Production</th>
                        <th>Fee</th>
                        <th>Client Product</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($clients as $client)

                      <tr>
                        <td> {{$loop->iteration}}</td>
                        <td class="text-uppercase"> {{$client->name_client}}</td>
                        <td> {{$client->products}}</td>
                        <td class="text-uppercase"> {{$client->location}}</td>
                        <td> {{$client->age}}</td>
                        <td> {{$client->date_production}}</td>
                        <td>Rp  {{$client->fee}}</td>
                        <td>
                          <ol>
                            @foreach ($client->product as $item)
                                <li>{{$item->nama_product}}</li>
                            @endforeach
                          </ol>
                        </td>
                        <td>
                            <a class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal{{$loop->iteration}}"><i class="far fa-eye"></i></a>
                            <div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$loop->iteration}}" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel{{$loop->iteration}}">Testimoni</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card mb-3" style="max-width: 100%;">
                                            <div class="row no-gutters">
                                              <div class="col-md-6">
                                              <img src="{{Storage::url($client->img_client)}}" class="card-img" alt="..." width="80px" height="600px">
                                              </div>
                                              <div class="col-md-6 py-5">
                                                <div class="card-body">
                                                  <h2 class="card-title text-uppercase" style="font-family: 'Kaushan Script', cursive;
                                                  ">{!!$client->name_client!!}</h2>
                                                  <p class="card-text text-muted text-uppercase" style="font-size: 15px">{{$client->location}}</p>
                                                  <br>
                                                  <p class="card-text text-left">{!!$client->description!!}</p>

                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <form action="{{ route('client.destroy', ['client' => $client->id]) }}" method="POST" class="d-inline-block">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger "><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                      </tr>
                      @empty
                     @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>

    {{-- Modal Bootstrap Online --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

@endsection
