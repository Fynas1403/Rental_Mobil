<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\ModelUsers;
use Validator;

class Users extends Controller
{
    public function index()
    {
        $data['datas']=ModelUsers::all();
        return view('users',$data);
    }
//     public function create()
//     {
//         return view('users_create');
//     }

//     public function store(Request $request)
//     {
//         ModelUsers::create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => $request->password
//         ]);

//         return redirect()->action('Users@index')->with('alert_message', 'Berhasil menambah data!');
// }

//     public function edit($id)
//     {
//         $data = ModelUsers::where('id_mobil', $id)->get();
//         return view('mobil_edit', compact('data'));
//     }

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

    // public function update(Request $request)
    // {
    //     ModelUsers::where('id_mobil', $request->id)->update([
    //         'plat_nomor' => $request->plat_nomor,
    //         'merk' => $request->merk,
    //         'warna' => $request->warna,
    //         'tahun_pembuatan' => $request->tahun_pembuatan
            
    //     ]);

    //     return redirect()->action('Mobil@index')->with('alert_message', 'Berhasil merubah data!');
    // }

    // public function update(Request $request, $id){
    //     $kontakUpdate = ModelKontak::where('id_kontak', $id)->first();
    //     $kontakUpdate->update($request->all());
    //     return redirect()->action('Kontak@index');
    // }

    // public function hapus($id)
    // {
    //     ModelUsers::where('id_mobil', $id)->delete();

    //     return redirect()->action('Mobil@index')->with('alert_message', 'Berhasil menghapus data!');
    // }

 

    // public function detail($id_mobil) {
    //     $data = ModelUsers::where('id_mobil', $id_mobil)->get();
    //     return view('mobil_detail', compact('data'));
    // }
    // public function cetak_pdf(){
    //     $kontak = ModelUsers::all();
    //     $pdf = PDF::loadview('mobil_pdf',['mobil'=>$mobil
    //     ]);
    //     return $pdf->stream();
    // }


    public function __construct()
    {
        $this->middleware('auth');
    }
}