<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class MahasiswaController extends Controller
{
    //

    public function index(){
        $mahasiswas = Mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create(){
        return view('mahasiswa.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'nim'   =>  'required | size:8 | unique:mahasiswas',
            'nama'   =>  'required | min:3 | max:50',
            'jenis_kelamin'   =>  'required | in:P,L',
            'email' => 'required | email',
            'jurusan'   =>  'required',
            'alamat' => '',
        ],
        [
            'required' => ':attribute wajib diisi.',
            'unique' => ':attribute sudah ada',
            'size' => ':attribute harus berukuran :size karakter.',
            'email' => ':attribute email harus valid.',
            'min' => ':attribute minimal :min karakter.',
            'max' => ':attribute maksimal :max karakter.',
            'in' => ':attribute yang dipilih tidak valid.',
        ]);

        if($validator->fails()){
            return redirect('/mahasiswas/create')->with('errors', 'data gagal')->withErrors($validator)->withInput();
        }else{
            Mahasiswa::create($request->all());

            return redirect('/mahasiswas')->with('success', "Data Berhasil Ditambahkan!!");
        }
    }

    public function show(Mahasiswa $mahasiswa){
        return view('mahasiswa.show',['mahasiswa' => $mahasiswa]);
    }

    public function edit(Mahasiswa $mahasiswa){
        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request ,Mahasiswa $mahasiswa){
        $validator = Validator::make($request->except('_method','_token'),[
            'nim'   =>  'required | size:8 | unique:mahasiswas,nim,'.$mahasiswa->id,
            'nama'   =>  'required | min:3 | max:50',
            'jenis_kelamin'   =>  'required | in:P,L',
            'email' => 'required | email',
            'jurusan'   =>  'required',
            'alamat' => '',
        ],
        [
            'required' => ':attribute wajib diisi.',
            'unique' => ':attribute sudah ada',
            'size' => ':attribute harus berukuran :size karakter.',
            'email' => ':attribute email harus valid.',
            'min' => ':attribute minimal :min karakter.',
            'max' => ':attribute maksimal :max karakter.',
            'in' => ':attribute yang dipilih tidak valid.',
        ]);

        if($validator->fails()){
            return redirect()->route('mahasiswas.edit', ['id', $request->id])->with('errors', 'data gagal')->withErrors($validator)->withInput();
        }else{
            Mahasiswa::where('id', $mahasiswa->id)->update($request->except('_method','_token'));

            return redirect('/mahasiswas')->with('success', "Data Berhasil Diupdate!!");
        }
    }

    public function destroy(Mahasiswa $mahasiswa){

        $mahasiswa->delete();

        return redirect('/mahasiswas')->with('success', "Data Berhasil Dihapus");
    }
}
