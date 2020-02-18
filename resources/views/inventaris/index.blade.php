@extends('adminlte::page')
@section('content')

 <div class="row">

        <div class="col-lg-12 margin-tb" > 

            <div class="pull-left">

                <h2>Data Inventari</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('inventaris.create') }}"> Create New inventari</a>
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

            <th>ID Inventaris</th>

            <th>Nama</th>

            <th>Kondisi</th>

            <th>Keterangan</th>

             <th>Jumlah</th>

             <th>ID Jenis</th>

            <th>Tanggal Register</th>

            <th>ID Ruang</th>

            <th>Kode Inventaris</th>

             <th>ID Petugas</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($inventaris as $inventari)

        <tr bgcolor="white">

            <td>{{ ++$i }}</td>

            <td>{{ $inventari->id }}</td>

            <td>{{ $inventari->nama }}</td>

             <td>{{ $inventari->kondisi }}</td>

            <td>{{ $inventari->keterangan }}</td>

            <td>{{ $inventari->jumlah }}</td>

            <td>{{ $inventari->id_jenis }}</td>

             <td>{{ $inventari->tgl_register }}</td>

            <td>{{ $inventari->id_ruang }}</td>

            <td>{{ $inventari->kd_inventaris }}</td>

            <td>{{ $inventari->id_petugas }}</td>

            <td>

                <form action="{{ route('inventaris.destroy',$inventari->id) }}" method="POST">

        

                    <a class="btn btn-info" href="{{ route('inventaris.show',$inventari->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('inventaris.edit',$inventari->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type ="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $inventaris->links() !!}


@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection