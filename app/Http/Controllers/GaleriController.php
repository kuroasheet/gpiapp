<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class GaleriController extends Controller
{
    public function index()
    {
        $data['galeri'] = Galeri::all();
        return view('galeri.index', $data);
    }

    public function save(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            // 'image_path' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $fileName = time() . '.' . $request->image_path->extension();
        $request->image_path->storeAs('public/geleri', $fileName);
        $data['image_path'] = $fileName;

        if(Galeri::create($data))
        {
            return redirect()->back()->with('success','Galeri berhasil ditambahkan.');
        }
        return redirect()->back()->with('error','Galeri gagal ditambahkan.');
    }

    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            'judul' => 'required',
        ]);

        $galeri = Galeri::findOrFail($id);

        if($request->image_path)
        {
            $fileName = time() . '.' . $request->image_path->extension();
            $request->image_path->storeAs('public/geleri', $fileName);

            Storage::delete('galeri/' . $galeri->image_path);
            $galeri->image_path = $fileName;
        }
        $galeri->judul = $request->judul;

        if($galeri->save())
        {
            return redirect()->back()->with('success','Galeri berhasil diubah.');
        }
        return redirect()->back()->with('error','Galeri gagal diubah.');
    }

    public function delete(Request $request, int $id)
    {
        $galeri = Galeri::findOrFail($id);
        $image = $galeri->image_path;
        if($galeri->delete())
        {
            Storage::delete('galeri/' . $image);
            return redirect()->back()->with('success','Galeri berhasil dihapus.');
        }
        return redirect()->back()->with('error','Galeri gagal dihapus.');
    }
}
