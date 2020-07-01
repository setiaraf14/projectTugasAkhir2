@extends('front.master')
@section('title', 'Clients')

@section('judul-content')


@section('content')
<section id="portfolio" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="service-title pad-bt15">Our Clients</h2>
                <p class="sub-title pad-bt15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua.</p>
                <hr class="bottom-line">
            </div>
        </div>
            @forelse ($clients as $client)
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
                        <p class="card-text text-left">{!!$client->description!!}</p>

                    </div>
                  </div>
                </div>
              </div>
              <hr>
            @empty
                <div class="container">
                    <h1 class="text-center">maintenance</h1>
                </div>
            @endforelse
    </div>
  </section>
@endsection
