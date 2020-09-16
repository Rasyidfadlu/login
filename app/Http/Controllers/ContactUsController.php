<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use File;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('about');
    }

    public function store(Request $request)
    {
        $contact = $request->all();
        unset($contact['_token']);
        $status = \DB::table('contact_us')->insert($contact);

        if ($status) {
            return redirect('/about')->with('success', 'Your massage was send to admin');
        } else {
            return redirect('/about')->with('error', 'Fail to send your message, please try again later');
        }
    }

    public function pesan()
    {
        $pesan = \App\Pesan::get();
        return view('pesan', compact('pesan'));
    }

    public function destroy(Request $request, $id)
    {
        $status = \DB::table('contact_us')->where('id', $id)->delete();

        if ($status) {
            return redirect('/pesan')->with('succes', 'Berita berhasil dihapus');
        } else {
            return redirect('/pesan')->with('error', 'Gagal dihapus');
        }
    }
}