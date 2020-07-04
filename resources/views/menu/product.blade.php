@extends('front.master')
@section('title', 'Product')

@section('judul-content')
    <div class="wrapper">
        {{-- disini isi dari jumbotron paralax isi sesuai dengan judul content --}}
    </div>
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="service-title pad-bt15">Our Recent Works</h2>
        <p class="sub-title pad-bt15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua.</p>
        <hr class="bottom-line">
      </div>
      @forelse ($input as $input)
      <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero ">
        <figure>
          <img src="{{Storage::url($input->gambar_product)}}" alt="{{$input->nama_product}}" class="img-responsive" width="400" height="400">
          <figcaption>
            <h2>{{ $input->product->nama_product }} </h2>
            <p>Rp. {{ $input->harga }}</p>
          </figcaption>
        </figure>
      </div>
      @empty
            <td colspan="8" class="text-center">Data Kosong</td>
        @endforelse 
    </div>
</div>


@endsection

{{-- <style>
    .container-product{
        background-color: #fff;
        width: 300px; height: 400px;
        perspective: 200px;
        cursor: pointer;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;

        position: absolute;
        /* top: 50%; left: 50%; */
        /* transform: translate(-50%,-50%); */
    }

    .product, .details{
        position: absolute;
        width: 100%; height: 100%;
        /* left: 20px; */
        transition: all 0.7s;
    }
    .product-gambar, .gambar-back{
        position: absolute;
        backface-visibility: hidden;
        width: 100%; height: 100%;
    }

    .product{
        transform-origin: left;
        transform-style: preserve-3d; 
    }
    .product-gambar product{
        width: 100%; height: 100%;
    }
    .gambar-back{
        background-color: #fff;
        transform: rotateY(180deg);
        opacity: 0.7;
    }
    details{
        z-index: -1;
        background-color: #da4747;
    }
    .details apa{
        white-space: nowrap;
        font-family: Verdana; font-size: 20px;
        text-transform: uppercase;
        color: #fff;

        margin: 0;
        position: absolute;
        /* top: 50%; left: 50%; */
        /* transform: translate(-50%,-50%); */
    }
    .container-product:hover .product{
        transform: rotateY(-130deg);
    }
</style>

@forelse ($input as $input)
<div class="container-product">
    <div class="product">
        <div class="product-gambar">
            <img src="{{Storage::url($input->gambar_product)}}" alt="{{$input->product_id}}" width="600">
        </div>
        <div class="gambar-back"></div>
    </div>
    <div class="details">

    </div>
</div>
@empty
    <td colspan="8" class="text-center">Data Kosong</td>
@endforelse  --}}