<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index()
    {
        $data['pengaturan'] = Pengaturan::get()->first();
        return view('pengaturan.index', $data);
    }
    public function saveSejarah(Request $request)
    {
        $request->validate([
            'sejarah' => 'required'
        ]);

        $pengaturan = Pengaturan::get()->first();
        if($pengaturan)
        {
            $pengaturan->sejarah = $request->sejarah;
        }
        else{
            $pengaturan = new Pengaturan;
            $pengaturan->sejarah = $request->sejarah;
        }
        if($pengaturan->save())
        {
            return redirect()->back()->with('success','Sejarah berhasil disimpan.');
        }
        return redirect()->back()->with('error','Sejarah gagal disimpan.');
    }
    public function saveKontak(Request $request)
    {
        $request->validate([
            'kontak' => 'required'
        ]);

        $pengaturan = Pengaturan::get()->first();
        if($pengaturan)
        {
            $pengaturan->kontak = $request->kontak;
        }
        else{
            $pengaturan = new Pengaturan;
            $pengaturan->kontak = $request->kontak;
        }
        if($pengaturan->save())
        {
            return redirect()->back()->with('success','Kontak berhasil disimpan.');
        }
        return redirect()->back()->with('error','Kontak gagal disimpan.');
    }
}
