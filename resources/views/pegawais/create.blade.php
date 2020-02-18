@extends('adminlte::page')
@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Pegawai</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('pegawais.index') }}"> Back</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('pegawais.store') }}" method="POST">

    @csrf

  

     <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama</strong>

                <input type="text" name="nama" class="form-control" placeholder="Input nama">

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>NIP</strong>

                <input type="text" name="nip" class="form-control" placeholder="Input nip">

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat</strong>

                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

   

</form>


@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection