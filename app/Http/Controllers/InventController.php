<?php

namespace App\Http\Controllers;

use App\Models\Invent;
use Illuminate\Http\Request;

class InventController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Invent::where('namabarang','LIKE','%' .$request->search.'%')->paginate(10);
        }else{
            $data = Invent::paginate(10);
        }

        
        return view('datainventaris',compact('data'));
    }

    public function tambahinventaris(){
        return view('tambahdatainventaris');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Invent::create($request->all());
        return redirect()->route('inventaris')->with('success',' Data Inventaris Berhasil di Tambahkan');
    }

    public function tampilkandata($id){

        $data = Invent::find($id);
        //dd($data);
        return view('tampildatainventaris', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Invent::find($id);
        $data->update($request->all());
        return redirect()->route('inventaris')->with('success',' Data Inventaris Berhasil di Update');
    }

    public function delete($id){
        $data = Invent::find($id);
        $data->delete();
        return redirect()->route('inventaris')->with('success',' Data Inventaris Berhasil di Hapus');
    }
}
