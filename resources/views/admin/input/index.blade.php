@extends('back.master')

@section('title', 'Input')

@section('content')
    

<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <div class="py-4">
                {{-- <h2>Tabel Data Pembeli</h2> --}}
                <a href="{{ route('input.create') }}" class="btn btn-primary">Tambah Data <i class="fas fa-pen"></i></a>
            </div>
            @if (session()->has('pesan'))
                <div class="alert-success">
                    {{ session()->get('pesan') }}
                </div>
            @endif
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Produk</th>
                        <th>Nama Client</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Harga</th>    
                        <th scope="col">Action</th>    
                    </tr>
                </thead>
                <tbody>
                    @forelse ($inputs as $input)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$input->product->nama_product}}</td>
                            <td>{{$input->client->name_client}}</td>
                            <td><img src="{{ Storage::url($input->gambar_product) }} " alt="" style="width: 350px; height: 150px"></td>
                            <td>Rp. {{ number_format($input->harga, 2, ',', '.') }}</td>
                            <td>
                                <div class="d-flex justify-content-center align-items-center">
                                    
                                    <a href="{{ route('input.edit', ['input' => $input->id]) }}" class="btn btn-warning mr-4"><i class="fa-1x text-decoration-none fas fa-edit"></i></a>
    
                                    <form action="{{ route('input.destroy', ['input' => $input->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger p-1 ml-1"><i class="far fa-trash-alt"></i></button>                              
                                    </form>
                                </div>
                            </td>
                        </tr>
                            
                        </tr>
                        @empty
                            <td colspan="6" class="text-center">Data Kosong</td>
                        @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>

    {{-- Modal Bootstrap Online --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endsection