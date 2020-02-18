@extends('adminlte::page')
@section('content')

 <div class="row">

        <div class="col-lg-12 margin-tb" > 

            <div class="pull-left">

                <h2>Data pegawai</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('pegawais.create') }}"> Create New pegawai</a>
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

            <th>ID Pegawai</th>

            <th>Nama Pegawai</th>

             <th>NIP</th>

            <th>Alamat</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($pegawais as $pegawai)

        <tr bgcolor="white">
             <td>{{ ++$i }}</td>

            <td>{{ $pegawai->id }}</td>

            <td>{{ $pegawai->nama }}</td>

            <td>{{ $pegawai->nip }}</td>

            <td>{{ $pegawai->alamat }}</td>

            <td>

                <form action="{{ route('pegawais.destroy',$pegawai->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('pegawais.show',$pegawai->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('pegawais.edit',$pegawai->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $pegawais->links() !!}


@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection