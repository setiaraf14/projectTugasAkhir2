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
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Produk</th>
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
@endsection