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
          <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur distinctio veritatis dolorum est ab quas iusto dicta illum, tempore culpa omnis id, commodi, beatae reiciendis atque esse debitis laborum odio?</p>
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
                                <input type="text" class="form-control @error('name_client') is-invalid @enderror" id="name_client" name="name_client" placeholder="Format: John & Doe">
                                @error('name_client')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="products">Product</label>
                                <select class="form-control @error('products') is-invalid @enderror" style="width: 100%;" name="products" id="products">
                                  <option value="weeding" id="wedding" {{ old('products') == 'wedding' ? 'selected' : '' }}>Wedding</option>
                                  <option value="PreWedding" id="PreWedding" {{ old('products') == 'PreWedding' ? 'selected' : '' }}>PreWedding</option>
                                  <option value="Commercial" id="Commercial" {{ old('products') == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                                  <option value="catalog_product" id="catalog_product" {{ old('products') == 'catalog_product' ? 'selected' : '' }}>Catalog Product</option>
                                    @error('products')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" id="location" placeholder="Format: Place/Building/Hotel, City">
                                        @error('location')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" placeholder="31">
                                        @error('age')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_production">Date Production</label>
                                        <input type="date" name="date_production" id="date_production" class="form-control @error('date_production') is-invalid @enderror" id="date_production">
                                        @error('date_production')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
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

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">deskripsi</label>
                                <textarea id="field" onkeyup="countChar(this)" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"  rows="10"></textarea>
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
                                  <label class="custom-file-label " for="img_client">Choose file</label>
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
  <script>
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
