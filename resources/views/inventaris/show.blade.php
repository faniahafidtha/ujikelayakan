@extends('adminlte::page')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Inventari</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('inventaris.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama inventari : </strong>

                {{ $inventari->nama }}

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kondisi : </strong>

                {{ $inventari->kondisi }}

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan : </strong>

                {{ $inventari->keterangan }}

            </div>

        </div>
        
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jumlah : </strong>

                {{ $inventari->jumlah }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Jenis : </strong>

                {{ $inventari->id_jenis }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal Register : </strong>

                {{ $inventari->tgl_register }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Ruang : </strong>

                {{ $inventari->id_ruang }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kode Inventaris : </strong>

                {{ $inventari->kd_inventaris }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Petugas : </strong>

                {{ $inventari->id_petugas }}

            </div>

        </div>
    </div>

@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection