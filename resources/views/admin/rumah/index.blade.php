@extends('back.master')

@section('title', 'Company Profile')

@section('content')
<div class="container-fluid">
    <h1 class="text-center">Company Profile</h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th style="vertical-align: middle">Moto Perusahaan</th>
                    <th style="vertical-align: middle">Deksripsi Perusahaan</th>
                    <th style="vertical-align: middle">Visi Perusahaan</th>
                    <th style="vertical-align: middle">Misi Perusahaan</th>
                    <th style="vertical-align: middle">Logo Perusahaan</th>
                    <th style="vertical-align: middle">Alamat Perusahaan</th>
                    <th style="vertical-align: middle">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td style="vertical-align: middle">{!! $item->nama_perusahaan !!}</td>
                        <td style="vertical-align: middle">{!! Illuminate\Support\Str::of($item->moto_perusahaan)->limit(20) !!}</td>
                        <td style="vertical-align: middle">{!! Illuminate\Support\Str::of($item->desk_perusahaan)->limit(50) !!}</td>
                        <td style="vertical-align: middle">{!! Illuminate\Support\Str::of($item->visi_perusahaan)->limit(20) !!}</td>
                        <td style="vertical-align: middle">{!! Illuminate\Support\Str::of($item->misi_perusahaan)->limit(20) !!}</td>
                        <td style="vertical-align: middle"><img src="{{Storage::url($item->logo_perusahaan)}}" alt="" width="150"></td>
                        <td style="vertical-align: middle">{!! Illuminate\Support\Str::of($item->alamat_perusahaan)->limit(20) !!}</td>
                        <td style="vertical-align: middle">
                            <a href="{{ route('rumah.edit',$item->id) }}"
                                class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
