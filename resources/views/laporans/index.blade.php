@extends('adminlte::page')
 
@section('content')
    <div class="row" class="form-control">
        <div class="col-lg-12 margin-tb">
      
            <div class="pull-left">
                <h2>Laporan</h2>
                <form action="/laporans/cari" method="GET">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <input type="date" class="form-control @error('startDate') is-invalid @enderror mb-3" name="startDate" id="startDate">
                        @error('starDate')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="col-auto">
                        <label class="col-sm-2 mb-3"><b>-</b></label>
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-contorl @error('endDate')is-invalid @enderror mb-3" name="endDate" id="endDate">
                        @error('endDate')
                        <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Cari</button>
                        @php if(isset($startDate) && isset($endDate)){ @endphp
                        <a href="{{ route('laporans.print', ['startDate' => $startDate, 'endDate' => $endDate]) }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                        @php }else{ @endphp
                        <a href="{{ route('laporans.print') }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                        @php } @endphp
                    </div>
            </div>
        </div>
    </div>
  </form>

</form> 
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
        </tr>
            @endforeach
   		 </table>
     	
     </tr>
     @endsection

  @section('css')
 <link rel="stylesheet" type="text/css" href="/css/admin_custom.css">
 @endsection
