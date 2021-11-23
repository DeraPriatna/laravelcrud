<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DosenModel;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = DosenModel::all();
        return view('dosen.index',['dosen' => $dosen]);
    }

    public function tambah()
    {
        return view('dosen.doseninput');
    }

    public function inputData(Request $request)
    {
        // $nama = $request->input('nama');
        // $alamat = $request->input('alamat');
        // $phone = $request->input('phone');

        // $matkul = ["$alamat","$phone"];
        // $jurusan = [];
        DosenModel::create($request->all());
        return redirect('/dosen');

        // dd($nama." ".$alamat." ".$phone);
    }

    public function edit($id)
    {
        $dosen = DosenModel::find($id);
        return view('dosen.edit',['tampil' => $dosen]);
    }

    public function update(Request $request, $id)
    {
        $dosen = DosenModel::find($id);
        $dosen->update($request->all());
        return redirect('/dosen');
    }

    public function hapus($id)
    {
        $dosen = DosenModel::find($id);
        $dosen->delete();
        return redirect('/dosen');
    }
}
