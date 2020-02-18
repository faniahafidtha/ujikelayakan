@extends('adminlte::page')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Officer</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('officers.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Username : </strong>

                {{ $officer->username }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Password : </strong>

                {{ $officer->password }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama Petugas : </strong>

                {{ $officer->nama_petugas }}

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Level : </strong>

                {{ $officer->id_level }}

            </div>

        </div>
        
    </div>

@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection