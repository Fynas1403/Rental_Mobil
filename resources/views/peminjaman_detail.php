@extends('layout.main')
@section('title, mobil')
@section('container')
<div class="container">
    <section class="main-section">
    
        <div class="card-header">
        <center>
            <h1>Detail Peminjaman</h1>
            </center>
            <hr>
            <div class="content">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @foreach($data as $datas)
            <form action="/peminjaman/detail" method="post">
                {{ csrf_field() }}
                
            <table class="table  table-bordered">
            <tbody>
                <input type="hidden" name="id" value="{{ $datas->id_pinjam }}"><br>
                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="nama">Nama</label></td>
                    <td> {{ $datas->nama }} </td>
                </div>
                </tr>
                
                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="nohp">No. Telepon</label></td>
                    <td >{{ $datas->nohp }} </td>
                </div>
                </tr>
                
                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="tgl_pinjam">Tanggal Pinjam</label></td>
                    <td> {{ $datas->tgl_pinjam }} </td>
                </div>
                </tr>

                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="tgl_kembali">Tanggal Kembali</label></td>
                    <td> {{ $datas->tgl_kembali }} </td>
                </div>
                </tr>
  
                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="harga_sewa_perhari">Harga Sewa Perhari</label></td>
                    <td> {{ $datas->tgl_kembali }} </td>
                </div>
                </tr>

                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="merk">Merk</label></td>
                    <td> {{ $datas->merk }} </td>
                </div>
                </tr>

            </tbody>
            </table>
            <div class="form-group">
                <a href="http://localhost/latihan-Telkom-rental/public/mobil" class="btn btn-success"><i class="fa fa-arrow-left"><b> Back</b></i></a>
                <!-- <a href="{{url('peminjaman_create')}}" class="btn btn-primary"><i class="far fa-window-restore"></i><b>Sewa</b></a> -->
            </div>    
            </form>
            @endforeach
            </div>
        </div>
    </section>
</div>
