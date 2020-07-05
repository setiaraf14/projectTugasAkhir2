@extends('front.master')
@section('title', 'Clients')
@section('clients', 'active')

@section('judul-content')
<div class="wrapper">
  <div class="container">
      <div class="row m-2">
        <div class="banner-info text-center wow fadeIn delay-05s">
          <h1>OUR</h1>
          <h1 class="bnr-sub-title" style="font-size: 150px">CLIENTS</h1>
          <div class="overlay-detail">
            <a href="#feature"><i class="fa fa-angle-down"></i></a>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection

@section('content')
<style>
  .kolom{
     border: 5px solid white;
     border-radius: 10px
  }
  .kolom :hover{
    box-shadow: -1px -1px 16px 0px rgba(0,0,0,0.75);
  }
</style>
<section id="portfolio" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="service-title pad-bt15">Our Clients</h2>
                <p class="sub-title pad-bt15">The following are some clients who have helped us to create happiness</p>
                <hr class="bottom-line">
            </div>
        </div>
        <div class="row">
          @forelse ($clients as $client)
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="kolom">
              <div class="blog-sec">
                <div class="blog-img">
                  <a href="">
                    <img src="{{Storage::url($client->img_client)}}" class="img-responsive">
                  </a>
                </div>
                <div class="blog-info p-2">
                  <h2>Product used By {{$client->name_client}}</h2>
                  <hr>
                  <p>
                    <ul>
                      @foreach ($client->product as $item)
                          <li>
                            {{$item->nama_product}}
                          </li>
                      @endforeach
                    </ul>
                  </p>
                  <p class="card-text text-left"><b>Description :</b> {!!$client->deskripsi!!}</p>
                </div>
              </div>
            </div>
          </div>
          @empty
                <div class="container">
                    <h1 class="text-center">maintenance</h1>
                </div>
            @endforelse
        </div>
            {{-- @forelse ($clients as $client)
            <div class="card ">
                <div class="row ">
                  <div class="col-md-7 text-right">
                    <img src="{{Storage::url($client->img_client)}}" class="card-img" alt="{{$client->name_client}}" width="550px">
                  </div>
                  <div class="col-md-5 text-left">
                    <div class="card-body" style="padding: 110px 0px">
                        <br>
                        <h1 class="card-title text-uppercase text-center" style="font-family: 'Bad Script', cursive;">{!!$client->name_client!!}</h1>
                        <p class="card-text text-center text-muted text-uppercase" style="font-size: 14px">{{$client->location}}</p>
                        <hr  style="border: 6px solid black;width:30%;heigh:100%">
                        <br>
                        <p class="card-text text-left">{!!$client->deskripsi!!}</p>
                        <hr>
                        <h1>Produk Yang Client Gunakan :</h1>
                        <ul>
                          @foreach ($client->product as $item)
                              <li>
                                {{$item->nama_product}}
                              </li>
                          @endforeach
                        </ul>
                        {{-- <img src="{{Storage::url($client->input[0]->gambar_product)}}" alt="" class="img-rounded" style="width: 300px;height:150px"> --}}
                        {{-- {{$client->input}} --}}
                  
    </div>
  </section>
@endsection
