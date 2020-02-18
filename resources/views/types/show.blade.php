@extends('adminlte::page')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Type</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('types.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Jenis :</strong>

                {{ $type->id }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama Jenis :</strong>

                {{ $type->nama_jenis }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kode Jenis :</strong>

                {{ $type->kd_jenis }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan :</strong>

                {{ $type->keterangan }}

            </div>

        </div>
    </div>

@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection