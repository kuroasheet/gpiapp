<?php

namespace App\Http\Controllers;

use App\Models\Baptism;
use Illuminate\Http\Request;

class BaptismController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Baptism::where('nama','LIKE','%' .$request->search.'%')->paginate(10);
        }else{
            $data = Baptism::paginate(10);
        }

        
        return view('databaptis',compact('data'));
    }

    public function tambahbaptis(){
        return view('tambahdatabaptis');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Baptism::create($request->all());
        return redirect()->route('baptis')->with('success',' Data Baptis Berhasil di Tambahkan');
    }

    public function tampilkandata($id){

        $data = Baptism::find($id);
        // dd($data);
        return view('tampildatabaptis', compact('data'));
    }

    public function updatedata(Request $request, $id) {
        $data = Baptism::find($id);
    
        if (!$data) {
            return redirect()->route('baptis')->with('error', 'Data Baptis tidak Ditemukan!');
        }
    
        $data->update($request->all());
    
        return redirect()->route('baptis')->with('success', 'Data Baptis Berhasil di Update');
    }
    

    public function delete($id){
        $data = Baptism::find($id);
    
        if ($data) {
            $data->delete();
            return redirect()->route('baptis')->with('success','Data Baptis Berhasil dihapus');
        } else {
            return redirect()->route('baptis')->with('error','Data Baptis tidak ditemukan atau gagal dihapus');
        }
    }
    
}
