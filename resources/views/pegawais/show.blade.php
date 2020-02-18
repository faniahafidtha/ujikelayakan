@extends('adminlte::page')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Pegawai</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('pegawais.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama Pegawai : </strong>

                {{ $pegawai->nama }}

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>NIP : </strong>

                {{ $pegawai->nip }}

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat : </strong>

                {{ $pegawai->alamat }}

            </div>

        </div>
        
        
    </div>

@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection