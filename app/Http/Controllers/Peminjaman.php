<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\ModelPeminjaman;
use Validator;

class Peminjaman extends Controller
{
    public function index()
    {
        $data['datas']=ModelPeminjaman::join('mobil','mobil.id_mobil','peminjaman.id_mobil')->get();
        return view('peminjaman',$data);
    }
    public function pengembalian()
    {
        $data['datas']=ModelPeminjaman::join('mobil','mobil.id_mobil','peminjaman.id_mobil')->get();
        return view('pengembalian',$data);
    }
    public function create()
    {
        return view('peminjaman_create');
    }
    public function detail($id_pinjam)
    {
      $data=ModelPeminjaman::all();
      return view('peminjaman_detail', compact('data'));
    }


    public function store(Request $request)
    {
        ModelPeminjaman::create([
            'nama' => $request->nama,
            'nohp' => $request->nohp,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'id_mobil' => $request->id_mobil
        ]);

        return redirect()->action('Peminjaman@index')->with('alert_message', 'Berhasil menambah data!');
}

    public function edit($id)
    {
        $data = ModelPeminjaman::where('id_pinjam', $id)->get();
        return view('peminjaman_edit', compact('data'));
    }

    // public function update(Request $request, $id){

    //     ModelKontak::where('id_kontak', $request->id)->update{
    //         'nama' => 'required'->
    //         'email' => 'required'
    //         'nohp' => 'required'
    //         'alamat' => 'required'
    //     }
        // $this->validate($request, [
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'nohp' => 'required',
        //     'alamat' => 'required',
        //     'foto' => 'required',
        //     'username' => 'required',
        //     'password' => 'required',
        //     'id_kategori' => 'required',
        // ]);
        //     $data = ModelKontak::findOrFail($id);
        // $data->nama = $request->nama;
        // $data->email = $request->email;
        // $data->nohp = $request->nohp;
        // $data->alamat = $request->alamat;
        // $data->foto = $request->foto;
        // $data->username = $request->username;
        // $data->password = $request->password;
        // $data->id_kategori = $request->id_kategori;
        // $data->save();

    //     return redirect('kontak');
    // }

    public function update(Request $request)
    {
        ModelPeminjaman::where('id_pinjam', $request->id)->update([
            'nama' => $request->nama,
            'nohp' => $request->nohp,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'id_mobil' => $request->id_mobil
        ]);

        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
        //     $kontak->foto = $request->file('foto')->getClientOriginalName();
        //     $kontak->save();
        // }

        return redirect()->action('Peminjaman@index')->with('alert_message', 'Berhasil merubah data!');
    }

    // public function update(Request $request, $id){
    //     $kontakUpdate = ModelKontak::where('id_kontak', $id)->first();
    //     $kontakUpdate->update($request->all());
    //     return redirect()->action('Kontak@index');
    // }

    public function hapus($id)
    {
        ModelPeminjaman::where('id_pinjam', $id)->delete();

        return redirect()->action('Peminjaman@pengembalian')->with('alert_message', 'Berhasil menghapus data!');
    }

    public function cetak_pdf(){
        $peminjaman = ModelPeminjaman::all();
        $pdf = PDF::loadview('peminjaman_pdf',['peminjaman'=>$peminjaman
        ]);
        return $pdf->download('Detail-Peminjaman.pdf');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
