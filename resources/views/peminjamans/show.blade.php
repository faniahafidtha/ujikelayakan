@extends('adminlte::page')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Peminjaman</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('peminjamans.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal Pinjam : </strong>

                {{ $peminjaman->tgl_pinjam }}

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal Kembali : </strong>

                {{ $peminjaman->tgl_kembali }}

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Status : </strong>

                {{ $peminjaman->status }}

            </div>

        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Pegawai : </strong>

                {{ $peminjaman->id_pegawai }}

            </div>

        </div>
    </div>

@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection