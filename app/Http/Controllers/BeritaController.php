<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use File;

class BeritaController extends Controller
{
    public function index()
    {
        // $data['berita'] = \DB::table('t_berita')->get();
        // return view('beritaAdmin', $data);

        $berita = \App\Berita::get();
        return view('beritaAdmin', compact('berita'));
    }
    public function index2()
    {
        // $data['berita'] = \DB::table('t_berita')->get();
        // return view('beritaAdmin', $data);

        $konten = \App\Berita::paginate(9);
        return view('berita', compact('konten'));
    }

    public function detail(Request $request, $id)
    {
        $data['konten'] = \DB::table('t_berita')->find($id);
        $list['berita'] = \DB::table('t_berita')->get();
        return view('detailBerita', $data, $list);
    }


    public function create()
    {
        return view('formBerita');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        // unset($input['_token']);
        // $status = \DB::table('t_berita')->insert($input);

        $status = \App\Berita::create($input);

        if ($request->hasFile('file')) {
            $file =  $request->file('file');
            $extension = $file->getClientOriginalName();
            $filename = time() . '_' . $extension;
            $file->move('assets/image/', $filename);
            $status->file =  $filename;
            $status->save();
        }

        if ($status) {
            return redirect('/beritaAdmin')->with('success', 'Berita berhasil diunggah');
        } else {
            return redirect('/beritaAdmin/create')->with('error', 'Berita gagal diunggah');
        }
    }

    public function edit(Request $request, $id)
    {
        $berita = \App\Berita::find($id);
        return view('formBerita', compact('berita'));
    }


    public function update(Request $request, $id)
    {
        $rule = [
            'Judul'     => 'required',
            'Headline'  => 'required',
            'file'      => '',
            'Isi'       => 'required',
            'Pengirim'  => 'required',
            'Tanggal'   => ''
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        // unset($input['_token']);
        // unset($input['_method']);

        // $status = \DB::table('t_berita')->where('id', $id)->update($input);

        $berita = \App\Berita::find($id);
        $status = $berita->update($input);

        if ($request->hasFile('file')) {
            $file =  $request->file('file');
            $extension = $file->getClientOriginalName();
            $filename = time() . '_' . $extension;
            $file->move('assets/image/', $filename);
            $berita->file =  $filename;
            $berita->update();
        }


        if ($status) {
            return redirect('/beritaAdmin')->with('succes', 'Berita berhasil diperbarui');
        } else {
            return redirect('/beritaAdmin/create')->with('error', 'Gagal diperbaharui');
        }
    }


    public function destroy(Request $request, $id)
    {
        // $status = \DB::table('t_berita')->where('id', $id)->delete();

        $berita = \App\Berita::find($id);

        File::delete('assets/image/' . $berita->file);

        $status = $berita->delete();

        if ($status) {
            return redirect('/beritaAdmin')->with('succes', 'Berita berhasil dihapus');
        } else {
            return redirect('/beritaAdmin/create')->with('error', 'Gagal dihapus');
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $konten = \App\Berita::where('Judul', 'like', "%" . $search . "%")->paginate(9);

        return view('berita', compact('konten'));
    }
}