<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Wedding::where('namapasangan','LIKE','%' .$request->search.'%')->paginate(10);
        }else{
            $data = Wedding::paginate(10);
        }

        
        return view('datanikah',compact('data'));
    }

    public function tambahnikah(){
        return view('tambahdatanikah');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Wedding::create($request->all());
        return redirect()->route('nikah')->with('success',' Data Nikah Berhasil di Tambahkan');
    }

    public function tampilkandata($id){

        $data = Wedding::find($id);
        //dd($data);
        return view('tampildatanikah', compact('data'));
    }

    public function updatedata(Request $request, $id) {
        $data = Wedding::find($id);
    
        if (!$data) {
            return redirect()->route('nikah')->with('error', 'Data Nikah tidak Ditemukan!');
        }
    
        $data->update($request->all());
    
        return redirect()->route('nikah')->with('success', 'Data Nikah Berhasil di Update');
    }

    public function delete($id){
        $data = Wedding::find($id);
    
        if ($data) {
            $data->delete();
            return redirect()->route('nikah')->with('success','Data Pasangan Berhasil dihapus');
        } else {
            return redirect()->route('nikah')->with('error','Data Pasangan tidak ditemukan atau gagal dihapus');
        }
    }
}
