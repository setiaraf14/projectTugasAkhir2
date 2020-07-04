@extends('back.master')

@section('title', 'Product')

@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">          
                <div class="card">
                    <div class="card-header text-center">Form Type Produk</div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="nama_product">Input Type</label>
                                        <input type="text" name="nama_product" id="nama_product" class="form-control @error('nama_product') is-invalid @enderror" autocomplete="off" value="{{ old('nama_product') }}">
                                        @error('nama_product')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
@endsection