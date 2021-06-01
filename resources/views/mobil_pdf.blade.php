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
		<h5>Data Mobil</h5>

	</center>

	<table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr align="center">
                    <th scope="col"><b>NO</th>
                    <th scope="col"><b>PLAT NOMOR</th>
                    <th scope="col"><b>MERK</th>
                    <th scope="col"><b>WARNA</th>
                    <th scope="col"><b>TAHUN PEMBUATAN</th>
     
                </tr>
                </thead>
		<tbody>
            @php $no=0; @endphp
            @foreach($mobil as $data)
             @php $no++; @endphp
			<tr class="table-info" align="center">
                    <td><b>{{$no}}</td>
                    <td>{{$data->plat_nomor}}</td>
                    <td>{{$data->merk}}</td>
                    <td>{{$data->warna}}</td>
                    <td>{{$data->tahun_pembuatan}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>