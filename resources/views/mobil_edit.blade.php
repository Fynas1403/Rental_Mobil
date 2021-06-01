@extends('layout.main')
@section('title', "Mobil_edit")
@section('container')
<div class="container">
<div class="p-3  bg-info text-white">
<div class="row">
<div class="col-md-12">
<section class="main-section">
    <div class="content">
        <h1 align="center">Edit Mobil</h1>
        <hr>

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li><strong>{{$error}}</strong></li>
            @endforeach
        </div> 
        @endif
        @foreach($data as $datas)
        <form action="{{ url('/mobil/update') }}" method="post">
            {{csrf_field() }}
           <input type="hidden" name="id" value="{{ $datas->id_mobil }}">
            <div class="form-group">
                <label for="plat_nomor">Plat Nomor :</label>
                <input type="text" class="form-control" id="plat_nomor" name="plat_nomor" value="{{ $datas->plat_nomor}}" required 
                oninvalid="this.setCustomValidity('Plat Nomor Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
            
            <div class="form-group">
                <label for="merk">Merk :</label>
                <input type="text" class="form-control" id="merk" name="merk" value="{{$datas->merk}}" required
                oninvalid="this.setCustomValidity('Merk Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
           
            <div class="form-group">
                <label for="warna">Warna :</label>
                <input type="text" class="form-control" id="warna" name="warna" value="{{$datas->warna}}" required
                oninvalid="this.setCustomValidity('Warna Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
                <label for="gambar">Gambar :</label>
                <input type="file" class="btn btn-secondary" class="form-control" id="gambar" name="gambar"value="{{$datas->gambar}}" required
                oninvalid="this.setCustomValidity('Gambar Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
                <label for="tahun_pembuatan">Tahun Pembuatan :</label>
                <input type="date" class="form-control" id="tahun_pembuatan" name="tahun_pembuatan" value="{{$datas->tahun_pembuatan}}" required
                oninvalid="this.setCustomValidity('Tahun Pembuatan Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
          
            <div class="form-group">
                <label for="harga_sewa_perhari">Harga Sewa Perhari :</label>
                <input type="text" class="form-control" id="harga_sewa_perhari" name="harga_sewa_perhari" value="{{$datas->harga_sewa_perhari}}" required
                oninvalid="this.setCustomValidity('Harga Sewa Perhari Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary"><i class="far fa-check-circle"></i><b> Update</b></button>
                <button type="reset" class="btn btn-md btn-secondary"><i class="fas fa-sync-alt"></i><b> Reset</b></button>
                <a href="{{url('/mobil')}}" class="btn btn-md btn-danger"><i class="fa fa-arrow-left"><b> Cancel</b></i></a>
            </div>
        </form>
        @endforeach
    </div>
</section>
</div>
</div>
</div>
</div>
@endsection