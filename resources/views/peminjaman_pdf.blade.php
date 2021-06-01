<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Detail Peminjaman</h5>

	</center>

	<table class="table table-hover table-striped">
    <thead class="thead-dark">
                <tr align="center">
                    <th scope="col"><b>NO</th>
                    <th scope="col"><b>NAMA</th>
                    <th scope="col"><b>NO. TELEPON</th>
                    <th scope="col"><b>MERK</th>
                    <th scope="col"><b>HARGA SEWA PERHARI</th>
                    <th scope="col"><b>TANGGAL PINJAM</th>
                    <th scope="col"><b>TANGGAL KEMBALI</th>
                    

                </tr>
                </thead>
                @php $no=0; @endphp
                @foreach($peminjaman as $data)
                @php $no++; @endphp
                <tr class="table-info" align="center">
                    <td><b>{{$no}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->nohp}}</td>
                    <td>{{$data->merk}}</td>
                    <td>{{$data->harga_sewa_perhari}}</td>
                    <td>{{$data->tgl_pinjam}}</td>
                    <td>{{$data->tgl_kembali}}</td>
                   
                    </tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
