@extends('back.master')

@section('title', 'Product')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Form Type Produk</div>
                    <div class="card-body">
                        <form action="{{ route('product.update', ['product' => $product->id]) }}" method="post" >
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="nama_product">Jabatan</label>
                                        <input type="text" name="nama_product" id="nama_product" class="form-control @error('nama_product') is-invalid @enderror" autocomplete="off" value="{{ old('nama_product') ?? $product->nama_product }}">
                                        @error('nama_product')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-block btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection