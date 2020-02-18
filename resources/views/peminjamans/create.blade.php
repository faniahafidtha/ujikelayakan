@extends('adminlte::page')
@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Peminjaman</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('peminjamans.index') }}"> Back</a>

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

   

<form action="{{ route('peminjamans.store') }}" method="POST">

    @csrf

  

     <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal Pinjam</strong>

                <input type="date" name="tgl_pinjam" class="form-control">

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal Kembali</strong>

                <input type="date" name="tgl_kembali" class="form-control">

            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Status</strong>

                <input type="status" class="form-control" name="status" placeholder="Input status">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Pegawai</strong>

               
               <select class="form-control" name="id_pegawai" id="id_pegawai">
                    <option></option>
                    @foreach ($pegawais as $pegawai)
                    <option value="{{$pegawai->id}}">{{$pegawai->id}} - {{$pegawai->nama}} </option>
                    @endforeach
                </select>
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