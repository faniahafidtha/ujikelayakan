<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }} ">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body onafterprint="redirect()">
    <br>
    @php if(isset($startDate) && isset($endDate)){ @endphp
    <h2 style="margin-left: 1%;">Laporan Inventaris: @php echo $startDate @endphp sampai @php echo $endDate @endphp</h2>
    @php }else{ @endphp
    <h2><center>Laporan Inventaris</center></h2>
    @php } @endphp
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr bgcolor="white">

             <th scope="col">No</th>

            <th scope="col">ID Inventaris</th>

            <th scope="col">Nama</th>

            <th scope="col">Kondisi</th>

            <th scope="col">Keterangan</th>

             <th scope="col">Jumlah</th>

             <th scope="col">ID Jenis</th>

            <th scope="col">Tanggal Register</th>

            <th scope="col">ID Ruang</th>

            <th scope="col">Kode Inventaris</th>

             <th scope="col">ID Petugas</th>

                </tr>
            </thead>
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
    </div>
</body>

 <h6 align="right">
@php $tgl=date('d-m-Y'); @endphp
   Bogor,{{$tgl}} 
   </br>
   <br>
Kepala Inventaris
</h6>
</br>
</br>
</br>
</br>
</br>

<h6 align="right"> 

.......

</h6>
<script type="text/javascript">
    window.print();
</script>


<script type="text/javascript">
    function redirect() {
        window.location.href = '@php echo $redirect; @endphp';
    }
</script>
</html>