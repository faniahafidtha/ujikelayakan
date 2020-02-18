@extends('adminlte::page')
@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Inventaris</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('inventaris.index') }}"> Back</a>

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

   

<form action="{{ route('inventaris.store') }}" method="POST">

    @csrf

  

     <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama Inventaris</strong>

                <input type="text" name="nama" class="form-control" placeholder="Input nama inventaris">

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kondisi</strong>

                <input type="text" name="kondisi" class="form-control" placeholder="Input kondisi">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan</strong>

                <input type="text" name="keterangan" class="form-control" placeholder="Input keterangan">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jumlah</strong>

                <input type="text" name="jumlah" class="form-control" placeholder="Input jumlah">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Jenis</strong>

                 <select class="form-control" name="id_jenis" id="id_jenis">
                    <option></option>
                    @foreach ($types as $type)
                    <option value="{{$type->id}}">{{$type->id}} - {{$type->nama_jenis}}</option>
                    @endforeach
                </select>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal Register</strong>

                <input type="date" name="tgl_register" class="form-control">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Ruang</strong>

                <select class="form-control" name="id_ruang" id="id_ruang">
                    <option></option>
                    @foreach ($rooms as $room)
                    <option value="{{$room->id}}">{{$room->id}} - {{$room->nama_ruang}}}</option>
                    @endforeach
                </select>


            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kode Inventaris</strong>

                <input type="text" name="kd_inventaris" class="form-control" placeholder="Input kode inventaris">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Petugas</strong>

                  <select class="form-control" name="id_petugas" id="id_petugas">
                    <option></option>
                    @foreach ($officers as $officer)
                    <option value="{{$officer->id}}">{{$officer->id}} - {{$officer->nama_petugas}}</option>
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