@extends('adminlte::page')
@section('content')

 <div class="row">

        <div class="col-lg-12 margin-tb" > 

            <div class="pull-left">

                <h2>Data Peminjaman</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('peminjamans.create') }}"> Create New Peminjaman</a>
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

            <th>ID peminjaman</th>

            <th>Tanggal Pinjam</th>

             <th>Tanggal Kembali</th>

            <th>Status</th>

            <th>ID Pegawai</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($peminjamans as $peminjaman)

        <tr bgcolor="white">
             <td>{{ ++$i }}</td>

            <td>{{ $peminjaman->id }}</td>

            <td>{{ $peminjaman->tgl_pinjam }}</td>

            <td>{{ $peminjaman->tgl_kembali }}</td>

            <td>{{ $peminjaman->status }}</td>

            <td>{{ $peminjaman->id_pegawai }}</td>

            <td>

                <form action="{{ route('peminjamans.destroy',$peminjaman->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('peminjamans.show',$peminjaman->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('peminjamans.edit',$peminjaman->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button peminjaman="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $peminjamans->links() !!}


@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection