@extends('admin.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
    @include('admin.layouts.nav')
    @include('admin.layouts.sidebar')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Fasilitas</h1>
                    </div>
                    {{-- <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/akun-terdaftar') }}">Akun Terdaftar</a></li>
              </ol>
            </div> --}}
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-card-primer">
                                <h3 class="card-title">Masukan data Fasilitas</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <form accept-charset="UTF-8" action="{{ route('admin.training.facility.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group {{ $errors->has('facility_name') ? 'has-error' : '' }}">
                                            <label class="text-success" for="facility_name">Fasilitas</label>
                                            <input type="text" name="facility_name" class="form-control" id="facility_name"
                                                value="{{ old('facility_name') }}" placeholder="fasilitas">
                                            @if ($errors->has('facility_name'))
                                                <p class="alert alert-warning ">
                                                    {{ $errors->first('facility_name') }}
                                                </p>
                                            @endif
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('admin.training.facility') }}" class="btn btn-warning">Back</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@include('admin.layouts.script')
