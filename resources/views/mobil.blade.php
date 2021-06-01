@extends('layout.main')
@section('title', "Mobil")
@section('container')

<div class="col-md-16">
    <div class="card">
    <div class="p-3  bg-info text-white">
        <div class="header" align="center" >
            <br>
            <h1>Data Mobil</h1>
            <a href="{{url('/mobil_create')}}" class="btn btn-success btn-lg"><i class="fas fa-plus-square"></i><b> Tambah Mobil</b></a>
            <br><br>
            <a href="{{url('/mobil/cetak_pdf')}}" class="btn btn-warning btn-lg"><i class="fa fa-print">  <b>Print Out</b></i></a>
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
                    <th scope="col"><b>PLAT NOMOR</th>
                    <th scope="col"><b>MERK</th>
                    <th scope="col"><b>WARNA</th>
                    <th scope="col"><b>GAMBAR</th>
                    <th scope="col"><b>TAHUN PEMBUATAN</th>
                    <th scope="col"><b>HARGA SEWA PERHARI</th>
                    <th scope="col"><b>OPSI</th>
                </tr>
                </thead>
                @php $no=0; @endphp
                @foreach($datas as $data)
                @php $no++; @endphp
                <tr class="table-info" align="center">
                    <td><b>{{$no}}</td>
                    <td>{{$data->plat_nomor}}</td>
                    <td>{{$data->merk}}</td>
                    <td>{{$data->warna}}</td>
                    <td><img width="60" src="{{asset('images/'.$data->gambar)}}" alt=""></td>
                    <td>{{$data->tahun_pembuatan}}</td>
                    <td>{{$data->harga_sewa_perhari}}</td>
                    <td>
                    <!-- <a href="{{url('/mobil/detail/'.$data->id_mobil)}}" class="btn btn-primary"><i class="far fa-window-restore"></i> <b>Pinjam</b></a> -->
                    <a href="{{url('/mobil/edit/'.$data->id_mobil)}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                    <a href="{{url('/mobil/hapus/'.$data->id_mobil)}}" class="btn btn-danger" 
                    onclick="return confirm('Apakah anda yakin?')"><i class="far  fa-trash-alt"></i></a></td>
                </tr>
                @endforeach
            </table>
        </div>
   </div>  
   </div>
 </div>
@stop