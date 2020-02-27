@extends('adminlte::page')
@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Officer</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('officers.index') }}"> Back</a>

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

   

<form action="{{ route('officers.store') }}" method="POST">

    @csrf

  

     <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Username</strong>

                <input type="text" name="username" class="form-control" placeholder="Input username">

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Password</strong>

                <input type="password" name="password" class="form-control" placeholder="Input password">

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama Petugas</strong>

                <input type="text" name="nama_petugas" class="form-control" placeholder="Input nama petugas">

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Level</strong>

                
               <select class="form-control" name="id_level" id="id_level">
                    <option></option>
                    @foreach ($levels as $level)
                    <option value="{{$level->id}}">{{$level->id}} - {{$level->nama_level}} </option>
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