@extends('layout.main')
@section('title', "Peminjaman")
@section('container')

<div class="col-md-16">
    <div class="card">
    <div class="p-3 bg-info text-white">
        <div class="header" align="center" >
            <br>
            <h1>Data Peminjaman</h1>
            <a href="{{url('/peminjaman/cetak_pdf')}}" class="btn btn-warning btn-lg"><i class="fa fa-print">  <b>Print Out</b></i></a>
            <br><br>
            
    </div>    
        <div class="body">
   
            @if(Session::get('alert_pesan'))
                <div class="alert alert-success">
                    <strong>{{Session::get('alert_pesan')}}</strong>
                </div>
            @endif
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
                    <!-- <th scope="col"><b></th> -->

                </tr>
                </thead>
                @php $no=0; @endphp
                @foreach($datas as $data)
                @php $no++; @endphp
                <tr class="table-info" align="center">
                    <td><b>{{$no}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->nohp}}</td>
                    <td>{{$data->merk}}</td>
                    <td>{{$data->harga_sewa_perhari}}</td> 
                    <td>{{$data->tgl_pinjam}}</td>
                    <td>{{$data->tgl_kembali}}</td>
                    <!-- <td>
                    <a href="{{url('/peminjaman/detail/'.$data->id_pinjam)}}" class="btn btn-primary">Detail</a>
                    <a href="{{url('/peminjaman/edit/'.$data->id_pinjam)}}" class="btn btn-warning">Edit</a>
                    <a href="{{url('/peminjaman/hapus/'.$data->id_pinjam)}}" class="btn btn-danger">Kembalikan</a></td> -->
                </tr>
                @endforeach
            </table>
        </div>
   </div>  
   </div>
 </div>
@stop