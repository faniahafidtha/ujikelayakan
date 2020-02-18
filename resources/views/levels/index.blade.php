@extends('adminlte::page')
@section('content')

 <div class="row">

        <div class="col-lg-12 margin-tb" > 

            <div class="pull-left">

                <h2>Data Level</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('levels.create') }}"> Create New Level</a>
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

            <th>ID Level</th>

            <th>Nama Level</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($levels as $level)

        <tr bgcolor="white">

            <td>{{ $level->id }}</td>

            <td>{{ $level->nama_level }}</td>

            <td>

                <form action="{{ route('levels.destroy',$level->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('levels.show',$level->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('levels.edit',$level->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button level="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $levels->links() !!}


@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection