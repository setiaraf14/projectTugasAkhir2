@extends('back.master')

@section('title', 'Contact')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <h1>Form Contact</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Data Komplain, Kritik & Saran</h6>
                    </div>
                    <div class="card-body">
                        <button  class="btn btn-primary m-2" type="submit"  value="Refresh Page" onClick="document.location.reload(true)"><i class="fas fa-info-circle"></i> Refresh </button>
                        {{-- <button class="btn btn-information"  value="Refresh Page" onClick="document.location.reload(true)"></button> --}}
                      <table id="tabel-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contact as $contacts)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $contacts->nama }}</td>
                                        <td>{{ $contacts->email }}</td>
                                        <td>{{ $contacts->subject }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <label for="triger"></label>
                                                <button type="button"  id="triger" href="#" class="btn btn-info p-1 ml-1" data-toggle="modal" data-target="#exampleModal{{ $loop->iteration }}"><i class="fas fa-eye"></i></button>
                                                <form action="{{ route('contact.destroy', ['contact' => $contacts->id]) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger p-1 ml-1"><i class="far fa-trash-alt"></i></button>                              
                                                </form>
                                            </div>
                                        </td>
                                        <div class="modal fade" id="exampleModal{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">From : {{ $contacts->email }}</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <p>{{ $contacts->pesan }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </tr>
                                @empty
                                    
                                @endforelse
                            </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function reloadpage()
        {
        location.reload()
        }
    </script>
@endsection