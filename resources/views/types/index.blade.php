@extends('adminlte::page')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Data Jenis</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('types.create') }}"> Create New Type</a>

            </div>

        </div>

    </div>

   

     <br>

    @if ($message = Session::get('success'))

        <div class="pull-right">

            <p class="btn btn-info">{{ $message }}</p>

        </div>

    @endif
   

    <table class="table table-bordered">

        <tr bgcolor="white">

            <th>No</th>

            <th>ID Jenis</th>

            <th>Nama Jenis</th>

            <th>Kode Jenis</th>

            <th>Keterangan</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($types as $type)

        <tr bgcolor="white">

            <td>{{ ++$i }}</td>

            <td>{{ $type->id }}</td>

            <td>{{ $type->nama_jenis }}</td>

            <td>{{ $type->kd_jenis }}</td>

            <td>{{ $type->keterangan }}</td>

            <td>

                <form action="{{ route('types.destroy',$type->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('types.show',$type->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('types.edit',$type->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $types->links() !!}

      

@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection