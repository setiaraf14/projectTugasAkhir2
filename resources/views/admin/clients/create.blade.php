@extends('back.master')

@section('title', 'Clients')

@section('ckeditor')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endsection

@section('content')
<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Add Client</h1>
          <p class="mb-4">Form inputan data client baru</p>
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Clients</h6>
                    <a href="{{route('client.index')}}" class="btn btn-light"><h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-chevron-circle-left"></i>&nbsp;Back</h6></a>
                </div>
                <div class="card-body text-left">
                    <div class="card card-primary">
                        <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="card-body">
                            <div class="form-group">
                                <label for="name_client">Name Client</label>
                                <input type="text" class="form-control @error('name_client') is-invalid @enderror" id="name_client" name="name_client" placeholder="Format: John & Doe" value="{{ old('name_client') }}">
                                @error('name_client')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label for="products">Product</label>
                                <select class="form-control @error('products') is-invalid @enderror" style="width: 100%;" name="products" id="products">
                                  <option value="weeding" id="wedding" {{ old('products') == 'wedding' ? 'selected' : '' }}>Wedding</option>
                                  <option value="PreWedding" id="PreWedding" {{ old('products') == 'PreWedding' ? 'selected' : '' }}>PreWedding</option>
                                  <option value="Commercial" id="Commercial" {{ old('products') == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                                  <option value="catalog_product" id="catalog_product" {{ old('products') == 'catalog_product' ? 'selected' : '' }}>Catalog Product</option>
                                    @error('products')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </select>\
                            </div> --}}
                            <div class="form-group">
                              <label for="product">Product</label>
                              <select class="js-example-placeholder-multiple js-states form-control" multiple="multiple" id="product"
                                  name="product[]" placeholder="Pilih Product">
                                  @foreach ($product as $item)
                                      <option value="{{$item->id}}">{{$item->nama_product}}</option>
                                  @endforeach
                              </select>
                          </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" id="location" placeholder="Format: Place/Building/Hotel, City" value="{{ old('location') }}">
                                        @error('location')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" placeholder="31" value="{{ old('age') }}">
                                        @error('age')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="date_production">Date Production</label>
                                        <input type="date" name="date_production" id="date_production" class="form-control @error('date_production') is-invalid @enderror" id="date_production" value="{{ old('date_production') }}">
                                        @error('date_production')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fee">Fee</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="text" name="fee" id="fee" class="form-control @error('fee') is-invalid @enderror" placeholder="Format: 00000000">
                                            <div class="input-group-append">
                                              <span class="input-group-text">.00</span>
                                            </div>
                                          </div>
                                            @error('fee')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>

                                </div> --}}
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">deskripsi</label>
                                <textarea id="field" onkeyup="countChar(this)" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"  rows="10" value="{{ old('deskripsi') }}"></textarea>
                                <div id="charNum"></div>
                                @error('deskripsi')
                               <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                            <div class="form-group">
                              <label for="img_client">File Client</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input @error('img_client') is-invalid @enderror" id="img_client" name="img_client">
                                  <label class="custom-file-label " for="img_client" value="{{ old('img_client') }}">Choose file</label>
                                </div>
                              </div>
                                @error('img_client')
                               <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

{{-- <script src="{{ asset('/admin/js/bootstrap/custom-file-input.js') }}"></script> --}}
<script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script>
    $(".js-example-placeholder-multiple").select2({
            placeholder: "Pilih Hobi Anda"
        });
    CKEDITOR.replace( 'deskripsi' );
  </script>
  <script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
  </script>
<script>
    function countChar(val) {
      var len = val.value.length;
      if (len >= 900) {
        val.value = val.value.substring(0, 700);
      } else {
        $('#charNum').text(700 - len);
      }
    };
  </script>
@endsection
