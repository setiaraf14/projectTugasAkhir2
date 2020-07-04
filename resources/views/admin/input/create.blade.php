@extends('back.master')

@section('title', 'Input')

@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('input.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="product_id">Nama Produk</label>
                    <select name="product_id" id="product_id"
                        class="form-control @error('product_id') is-invalid @enderror">
                        @foreach($products as $product)
                            <option value="{{ $product->id }}"
                                {{ old('product_id') == $product->product_id ? 'selected' : '' }}>
                                {{ $product->nama_product }}
                            </option>
                        @endforeach
                    </select>
                    @error('product_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="product_id">Nama Client</label>
                    <select name="client_id" id="client_id"
                        class="form-control @error('client_id') is-invalid @enderror">
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}"
                                {{ old('client_id') == $client->client_id ? 'selected' : '' }}>
                                {{ $client->name_client }}
                            </option>
                        @endforeach
                    </select>
                    @error('client_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gambar_product">Foto</label>
                    <input type="file" name="gambar_product" id="gambar_product" class="form-control">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror"
                        placeholder="Harga" autocomplete="off" value="{{ old('harga') }}">
                    @error('harga')
                        {{ $message }}
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mb-2">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
