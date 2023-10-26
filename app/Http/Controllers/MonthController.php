<?php

namespace App\Http\Controllers;

use App\Models\Month;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Month::where('bulan','LIKE','%' .$request->search.'%')->paginate(10);
        }else{
            $data = Month::paginate(10);
        }

        
        return view('databulan',compact('data'));
    }

    public function tambahbulan(){
        return view('tambahdatabulan');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Month::create($request->all());
        return redirect()->route('bulan')->with('success',' Laporan Keuangan Bulanan Berhasil di Tambahkan');
    }

    public function tampilkandata($id){

        $data = Month::find($id);
        //dd($data);
        return view('tampildatabulan', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Month::find($id);
        $data->update($request->all());
        return redirect()->route('bulan')->with('success',' Laporan Keuangan Bulanan Berhasil di Update');
    }

    public function delete($id){
        $data = Month::find($id);
        $data->delete();
        return redirect()->route('bulan')->with('success',' Laporan Keuangan Bulanan Berhasil di Hapus');
    }
}
