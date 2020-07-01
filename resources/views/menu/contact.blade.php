@extends('front.master')
@section('title', 'Contact')

@section('judul-content')
    <div class="wrapper">
        <div class="container">
            <div class="row m-2">
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-sub-title" style="font-size: 150px">CONTACT</h1>
                <h1>US</h1>
                <div class="overlay-detail">
                  <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="container section-padding wow fadeInUp delay-05s">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Kirim kritik & Saran ?</h2>
            <p class="sub-title pad-bt15">Kritik dan saran anda sanget berarti bagi kualitas pelayanan kami, terus maju bersama kami dengan berikan saran-saran anda di kolom bawah ini</p>
            <hr class="bottom-line">
        </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.539073169224!2d106.69867541427233!3d-6.192370395517059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9ad7d4f64b9%3A0xa70a9b80d5c2284!2sEDU-TECH.ID!5e0!3m2!1sen!2sid!4v1593533044832!5m2!1sen!2sid" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="contact-form">
          
          <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="form-row ">
                <div class="col-md-6">
                  <input type="text" name="nama" for="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Masukan nama">
                  @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6">
                <input type="text" name="email" for="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="masukan email">
                @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>

              <br><br><br>

            <div class="form-row">
              <div class="col-md-12">
                <input type="text" name="subject" for="subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}" placeholder="masukan subject">
                @error('subject')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <br><br><br>

            <div class="form-row">
              <div class="col-md-12">
                <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                  <br><br>
                  <button type="submit" class="btn btn-primary btn-submit">SEND NOW</button>
              </div>
            </div>
          
            
          </form>
          
        </div>
      </div>
    </div>
      
  </div>
@endsection

