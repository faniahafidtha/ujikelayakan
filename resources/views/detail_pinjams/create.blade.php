@extends('adminlte::page')
@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Detail Pinjam</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('detail_pinjams.index') }}"> Back</a>

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

   

<form action="{{ route('detail_pinjams.store') }}" method="POST">

    @csrf

  

     <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Inventaris</strong>

                <select class="form-control" name="id_inventaris" id="id_inventaris">
                    <option></option>
                    @foreach ($inventaris as $inventari)
                    <option value="{{$inventari->id}}">{{$inventari->id}} - {{$inventari->nama}} </option>
                    @endforeach
                </select>

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jumlah</strong>

                <input type="text" name="jumlah" class="form-control" placeholder="Input jumlah">

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