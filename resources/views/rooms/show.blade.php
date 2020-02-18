@extends('adminlte::page')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Room</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama Ruang : </strong>

                {{ $room->nama_ruang }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kode Ruang : </strong>

                {{ $room->kd_ruang }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan : </strong>

                {{ $room->keterangan }}

            </div>

        </div>

    </div>

@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection