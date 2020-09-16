<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use File;

class RujukController extends Controller
{
    //
    public function index()
    {
        // $data['rujuk'] = \DB::table('t_rujuk')->get();
        // return view('hospitalAdmin', $data);
        $rujuk = \App\Rujuk::get();
        return view('hospitalAdmin', compact('rujuk'));
    }
    public function index2()
    {
        $rujuk = \App\Rujuk::paginate(6);
        return view('hospital', compact('rujuk'));
    }
    public function create()
    {
        return view('formHospital');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        // unset($input['_token']);
        // $status = \DB::table('t_rujuk')->insert($input);
        $status = \App\Rujuk::create($input);

        if ($request->hasFile('file')) {
            $file =  $request->file('file');
            $extension = $file->getClientOriginalName();
            $filename = time() . '_' . $extension;
            $file->move('assets/image/', $filename);
            $status->file =  $filename;
            $status->save();

            if ($status) {
                return redirect('/hospitalAdmin')->with('success', 'Rujukan berhasil diunggah');
            } else {
                return redirect('/hospitalAdmin/create')->with('error', 'Rujukan gagal diunggah');
            }
        }
    }
    public function edit(Request $request, $id)
    {

        $rujuk = \App\Rujuk::find($id);
        return view('formHospital', compact('rujuk'));
        // $data['berita'] = \DB::table('t_rujuk')->find($id);
        // return view('formHospital', $data);
    }
    public function update(Request $request, $id)
    {
        $rule = [
            'img' => '',
            'nm_rumahsakit' => 'required',
            'Alamat' => 'required',
            'Tingkat_rujukan' => 'required'
        ];

        $this->validate($request, $rule);

        $input = $request->all();

        $rujuk = \App\Rujuk::find($id);
        $status = $rujuk->update($input);

        if ($request->hasFile('file')) {
            $file =  $request->file('file');
            $extension = $file->getClientOriginalName();
            $filename = time() . '_' . $extension;
            $file->move('assets/image/', $filename);
            $rujuk->file =  $filename;
            $rujuk->update();
        }
        if ($status) {
            return redirect('/hospitalAdmin')->with('success', 'Rujukan berhasil diupdate');
        } else {
            return redirect('/hospitalAdmin/create')->with('error', 'Rujukan gagal diupdate');
        }
    }
    public function destroy(Request $request, $id)
    {
        $status = \DB::table('t_rujuk')->where('id', $id)->delete();

        if ($status) {
            return redirect('/hospitalAdmin')->with('success', 'Rujukan berhasil dihapus');
        } else {
            return redirect('/hospitalAdmin/create')->with('error', 'Rujukan gagal dihapus');
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $rujuk = \App\Rujuk::where('nm_rumahsakit', 'like', "%" . $search . "%")->paginate(6);

        return view('hospital', compact('rujuk'));
    }
}