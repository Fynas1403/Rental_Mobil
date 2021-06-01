@extends('layout.main')
@section('title', "Users")
@section('container')

<div class="col-md-16">
    <div class="card">
    <div class="p-3 bg-info text-white">
        <div class="header" align="center" >
            <br>
            <h1>Users</h1>
            <!-- <a href="{{ route('register') }}" class="btn btn-success btn-lg">Add User</a>
            <br><br>
            <a href="{{url('/users/cetak_pdf')}}" class="btn btn-warning btn-lg">Print Out</a> -->
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
                    <th scope="col"><b>EMAIL</th>
                    <!-- <th scope="col"><b>PASSWORD</th> -->
                    <th scope="col"><b>CREATED AT</th>
                    <th scope="col"><b>UPDATED AT</th>
                   
                    <!-- <th scope="col"><b>AKSI</th> -->
                </tr>
                </thead>
                @php $no=0; @endphp
                @foreach($datas as $data)
                @php $no++; @endphp
                <tr class="table-info" align="center">
                    <td><b>{{$no}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <!-- <td>{{$data->password}}</td> -->
                    <td>{{$data->created_at}}</td>
                    <td>{{$data->updated_at}}</td>
                    
                    <!-- <td>
                    <a href="{{url('/users/detail/'.$data->id)}}" class="btn btn-primary">Detail</a>
                    <a href="{{url('/users/edit/'.$data->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{url('/users/hapus/'.$data->id)}}" class="btn btn-danger" 
                    onclick="return confirm('Apakah anda yakin?')">Delete</a></td> -->
                </tr>
                @endforeach
            </table>
        </div>
   </div>  
   </div>
 </div>
@stop