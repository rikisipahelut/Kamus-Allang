<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kamus;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function tb_kamus(){
        $tb_kamus = kamus::all();
        return view('admin.tb_kamus')->with(['tb_kamus'=>$tb_kamus]);
    }
    public function form_tambah_kata(){
        return view('admin.form_tambah_kata');
    }
    public function tambah_kata(Request $request){
        $request->validate([
            'allang' => 'required',
            'indonesia' => 'required',
            'singkatan' => 'required',
        ]);
        $kalimat_allang = $request->kalimat_allang;
        $kalimat_indo = $request->kalimat_indo;

        if ($kalimat_allang == '') {
            $kalimat_allang = '-';
            $kalimat_indo = '-';
        }
         kamus::create([
            'allang' => $request -> allang,
            'indonesia' => $request -> indonesia,
            'kalimat_allang' => $kalimat_allang,
            'kalimat_indo' => $kalimat_indo,
            'singkatan' => $request -> singkatan,
            'audio' => '-',
            
        ]);

        return redirect('/admin/form_tambah_kata')->with('status','Kata '.$request->allang.' Berhasil ditambahkan');

    }
    public function form_ubah_kata(kamus $id){
        
        return view('admin.form_ubah_kata')->with(['data'=>$id]);
    }
    public function ubah_kata(kamus $id, Request $request){
        $request->validate([
            'allang' => 'required',
            'indonesia' => 'required',
            'singkatan' => 'required',
        ]);
        kamus::where('id',$id->id)
        ->update([
            'allang' => $request -> allang,
            'indonesia' => $request -> indonesia,
            'kalimat_allang' => $request->kalimat_allang,
            'kalimat_indo' => $request->kalimat_indo,
            'singkatan' => $request -> singkatan,
            'audio' => '-',
        ]);

        return redirect('/admin/tb_kamus')->with('status','kata berhasil diubah');
    }
    public function destroy_kata(kamus $id){
        $data = kamus::where('id',$id->id);
        $data->forceDelete();
        return redirect('/admin/dashboard')->with('status','kata berhasil dihapus!');
    }
}
