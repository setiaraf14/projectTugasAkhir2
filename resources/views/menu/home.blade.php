@extends('front.master')
@section('title', 'Home')
@section('home', 'active')

@foreach ($data as $item)
@section('judul-content')
        {{-- disini isi dari jumbotron paralax isi sesuai dengan judul content --}}
        <h3>WE ARE AT {{$item->nama_perusahaan}}</h3>
        <br>
        <h4 class="text-center">Our Motto Is : </h4>
        <br>
        <h1>{!! $item->moto_perusahaan !!}</h1>
@endsection

@section('content')
<section id="vismis">
<div class="container">
    <div class="row my-5">
        <div class="col-md-12">
            <h1 class="text-center">Visi & Misi Perusahaan</h1>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-6">
            <br>
            <h3 class="text-center">Visi Perusahaan</h3>
            <br>
            {!! $item->visi_perusahaan !!}
        </div>
        <div class="col-md-6">
            <br>
            <h3 class="text-center">Misi Perusahaan</h3>
            <br>
            {!! $item->misi_perusahaan !!}
        </div>
    </div>
</div>
</section>
<section>
    <section id="service" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <h1 class="text-center">Deskripsi Perusahaan</h1>
          {!! $item->desk_perusahaan !!}
        </div>
      </section>
</section>
@endsection
@endforeach