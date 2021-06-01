@extends('layout.main')
@section('title', "Peminjaman_create")
@section('container')
<div class="container">
<div class="row">
<div class="col-md-12">
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
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                <button type="reset" class="btn btn-md btn-secondary"><i class="fas fa-sync-alt"></i><b> Reset</b></button>
                <a href="{{url('/mobil')}}" class="btn btn-md btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</section>
</div>
</div>
</div>
@endsection