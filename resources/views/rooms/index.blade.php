@extends('adminlte::page')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb" > 

            <div class="pull-left">

                <h2>Data Ruang</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('rooms.create') }}"> Create New Room</a>
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

            <th>ID Ruang</th>

            <th>Nama Ruang</th>

            <th>Kode Ruang</th>

            <th>Keterangan</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($rooms as $room)

        <tr bgcolor="white">

            <td>{{ ++$i }}</td>

            <td>{{ $room->id }}</td>

            <td>{{ $room->nama_ruang }}</td>

            <td>{{ $room->kd_ruang }}</td>

            <td>{{ $room->keterangan }}</td>

            <td>

                <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('rooms.show',$room->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('rooms.edit',$room->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button room="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $rooms->links() !!}

      

@endsection

@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection