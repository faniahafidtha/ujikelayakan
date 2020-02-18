@extends('adminlte::page')
@section('content')

 <div class="row">

        <div class="col-lg-12 margin-tb" > 

            <div class="pull-left">

                <h2>Data Detail Pinjam</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('detail_pinjams.create') }}"> Create New Detail Pinjam </a>
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

            <th>Jumlah</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($detail_pinjams as $detail_pinjam)

        <tr bgcolor="white">

            <td>{{ ++$i }}</td>

            <td>{{ $detail_pinjam->id }}</td>

            <td>{{ $detail_pinjam->jumlah }}</td>

            <td>

                <form action="{{ route('detail_pinjams.destroy',$detail_pinjam->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('detail_pinjams.show',$detail_pinjam->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('detail_pinjams.edit',$detail_pinjam->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button detail_pinjam="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $detail_pinjams->links() !!}


@endsection
@section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection