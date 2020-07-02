@extends('back.master')

@section('title', 'Update Company Profile')
@section('ckeditor')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endsection
@section('content')
<div class="container">
    <h1 class="text-center">Update Company Profile</h1>
    <hr>
    <div class="card">
        <img src="{{Storage::url($rumah->logo_perusahaan)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <form action="{{ route('rumah.update',$rumah->id) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama_perusahaan">Nama Perusahaan</label>
                        <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror"
                            id="nama_perusahaan" name="nama_perusahaan"
                            value="{{ old('nama_perusahaan') ?? $rumah->nama_perusahaan }}">
                        @error('nama_perusahaan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="moto_perusahaan">Moto Perusahaan</label>
                        <textarea name="moto_perusahaan" id="moto_perusahaan"
                            class="form-control @error('moto_perusahaan') is-invalid @enderror">
                            {{ old('moto_perusahaan') ?? $rumah->moto_perusahaan }}
                        </textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="desk_perusahaan">Deskripsi Perusahaan</label>
                        <textarea name="desk_perusahaan" id="desk_perusahaan"
                            class="form-control @error('desk_perusahaan') is-invalid @enderror">
                            {{ old('desk_perusahaan') ?? $rumah->desk_perusahaan }}
                        </textarea>
                        @error('desk_perusahaan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="visi_perusahaan">Visi Perusahaan</label>
                        <textarea name="visi_perusahaan" id="visi_perusahaan"
                            class="form-control @error('visi_perusahaan') is-invalid @enderror">
                            {{ old('visi_perusahaan') ?? $rumah->visi_perusahaan }}
                        </textarea>
                        @error('visi_perusahaan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="misi_perusahaan">Misi Perusahaan</label>
                        <textarea name="misi_perusahaan" id="misi_perusahaan"
                            class="form-control @error('misi_perusahaan') is-invalid @enderror">
                            {{ old('misi_perusahaan') ?? $rumah->misi_perusahaan }}
                        </textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="logo_perusahaan">Logo Perusahaan</label>
                        <input type="file" class="form-control-file @error('logo_perusahaan') is-invalid @enderror" name="logo_perusahaan">
                        @error('logo_perusahaan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="alamat_perusahaan">Alamat Perusahaan</label>
                        <textarea name="alamat_perusahaan" id="alamat_perusahaan"
                            class="form-control @error('alamat_perusahaan') is-invalid @enderror">
                            {{ old('alamat_perusahaan') ?? $rumah->alamat_perusahaan }}
                        </textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'moto_perusahaan' );
    CKEDITOR.replace( 'desk_perusahaan' );
    CKEDITOR.replace( 'visi_perusahaan' );
    CKEDITOR.replace( 'misi_perusahaan' );
    CKEDITOR.replace( 'alamat_perusahaan' );
</script>
@endsection
