@extends('back.master')

@section('title', 'Input')

@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
        <form action="{{ route('input.update', $input->id ) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="product_id">Nama Produk</label>
                <select name="product_id" id="product_id" class="form-control @error('product_id') is-invalid @enderror">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" {{ old('product_id') ?? $input->product->product_id == $product->product_id ? 'selected' : '' }}>
                            {{ $product->nama_product }}
                        </option>
                    @endforeach
                    </select>
                    @error('product_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <img src="{{ Storage::url($input->gambar_product) }}" alt="" style="width: 150px;">
                    <input type="file" class="form-control-file" id="gambar_product" name="gambar_product" >
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga" autocomplete="off" value="{{ old('harga') ?? $input->harga }}">
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