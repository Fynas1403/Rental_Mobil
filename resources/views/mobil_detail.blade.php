@extends('layout.main')
@section('title, mobil')
@section('container')
<div class="container">
    <section class="main-section">
    
        <div class="card-header">
        <center>
            <h1>Detail Mobil</h1>
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
            <form action="/mobil/detail" method="post">
                {{ csrf_field() }}
                <div class="form-group"align="center">
                    <td><img width="250" src="{{asset('images/'.$datas->gambar)}}" alt=""></td>
                </div>
            <table class="table  table-bordered">
            <tbody>
                <input type="hidden" name="id" value="{{ $datas->id_mobil }}">
                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="plat_nomor">Plat Nomor</label></td>
                    <td> {{ $datas->plat_nomor }} </td>
                </div>
                </tr>
                
                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="merk">Merk</label></td>
                    <td >{{ $datas->merk }} </td>
                </div>
                </tr>
                
                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="warna">Warna</label></td>
                    <td> {{ $datas->warna }} </td>
                </div>
                </tr>

                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="tahun_pembuatan">Tahun Pembuatan</label></td>
                    <td> {{ $datas->tahun_pembuatan }} </td>
                </div>
                </tr>
  
                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label for="harga_sewa_perhari">Harga Sewa Perhari</label></td>
                    <td> {{ $datas->harga_sewa_perhari }}</td>
                </div>
                </tr>

                <tr class="table-primary">
                <div class="form-group">
                    <th scope="col"><label style='color:red;'>Id Mobil</label></td>
                    <td> {{ $datas->id_mobil }} </td>
                </div>
                </tr>

            </tbody>
            </table>
            <div class="form-group">
                <a href="http://localhost/latihan-Telkom-rental/public/rental" class="btn btn-success"><i class="fa fa-arrow-left"><b> Back</b></i></a>
                <!-- <a href="{{url('peminjaman_create')}}" class="btn btn-primary"><i class="far fa-window-restore"></i><b>Sewa</b></a> -->
            </div>    
            </form>
            @endforeach
            </div>
        </div>
    </section>
</div>
<br><br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="p-3  bg-info text-white">
<section class="main-section">
    <div class="content">
        <h1 align="center">Peminjaman</h1>
        <hr>
        
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </div>
        @endif
        
        <form action="{{ url('/peminjaman/store') }}" method="post">
            {{csrf_field() }}
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" class="form-control" id="nama" name="nama" required 
                oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
            
            <div class="form-group">
                <label for="nohp">No. Telepon :</label>
                <input type="text" class="form-control" id="nohp" name="nohp" 
                onkeypress="return event.charCode >= 48 && event.charCode <=57" required
                oninvalid="this.setCustomValidity('No. Telepon Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
           
            <div class="form-group">
                <label for="tgl_pinjam">Tanggal Pinjam :</label>
                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required
                oninvalid="this.setCustomValidity('Tanggal Pinjam Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
           
            <div class="form-group">
                <label for="tgl_kembali">Tanggal Kembali :</label>
                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required
                oninvalid="this.setCustomValidity('Tanggal Kembali Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
                <label for="id_mobil">Id Mobil :</label>
                <input type="text" class="form-control" id="id_mobil" name="id_mobil" required
                oninvalid="this.setCustomValidity('Tanggal Kembali Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary"><i class="far fa-window-restore"></i> <b>Pinjam</b></button>
                <!-- <a href="{{url('/mobil')}}" class="btn btn-md btn-danger">Cancel</a> -->
            </div>
        </form>
    </div>
</section>
</div>
</div>
</div>
</div>
@endsection