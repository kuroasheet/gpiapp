<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Member::where('nama','LIKE','%' .$request->search.'%')->paginate(10);
        }else{
            $data = Member::paginate(10);
        }

        
        return view('datajemaat',compact('data'));
    }

    public function tambahjemaat(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Member::create($request->all());
        return redirect()->route('jemaat')->with('success',' Data Jemaat Berhasil di Tambahkan');
    }

    public function tampilkandata($id){

        $data = Member::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Member::find($id);
        $data->update($request->all());
        return redirect()->route('jemaat')->with('success',' Data Jemaat Berhasil di Update');
    }

    public function delete($id){
        $data = Member::find($id);
    
        if ($data) {
            $data->delete();
            return redirect()->route('jemaat')->with('success','Data Jemaat Berhasil dihapus');
        } else {
            return redirect()->route('jemaat')->with('error','Data Jemaat tidak ditemukan atau gagal dihapus');
        }
    }
    
}
