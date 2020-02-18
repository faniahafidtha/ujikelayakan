@extends('adminlte::page')
@section('content')

 <div class="row">

        <div class="col-lg-12 margin-tb" > 

            <div class="pull-left">

                <h2>Data Petugas</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('officers.create') }}"> Create New Officer</a>
                <br>

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

            <th>ID Petugas</th>

            <th>Username</th>

            <th>Password</th>

            <th>Nama Petugas</th>

             <th>ID Level</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($officers as $officer)

        <tr bgcolor="white">

            <td>{{ ++$i }}</td>

            <td>{{ $officer->id }}</td>

            <td>{{ $officer->username }}</td>

            <td>{{ $officer->password }}</td>

            <td>{{ $officer->nama_petugas }}</td>

            <td>{{ $officer->id_level }}</td>

            <td>

                <form action="{{ route('officers.destroy',$officer->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('officers.show',$officer->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('officers.edit',$officer->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button officer="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $officers->links() !!}


@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection