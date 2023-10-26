<?php

namespace App\Http\Controllers;

use App\Models\Offering;
use Illuminate\Http\Request;

class OfferingController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Offering::where('tanggal','LIKE','%' .$request->search.'%')->paginate(10);
        }else{
            $data = Offering::paginate(10);
        }

        
        return view('dataperming',compact('data'));
    }

    public function tambahperming(){
        return view('tambahdataperming');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Offering::create($request->all());
        return redirect()->route('persembahan')->with('success',' Data Persembahan Mingguan Berhasil di Tambahkan');
    }

    public function tampilkandata($id){

        $data = Offering::find($id);
        //dd($data);
        return view('tampildataperming', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Offering::find($id);
        $data->update($request->all());
        return redirect()->route('persembahan')->with('success',' Data Persembahan Mingguan Berhasil di Update');
    }

    public function delete($id){
        $data = Offering::find($id);
        $data->delete();
        return redirect()->route('persembahan')->with('success',' Data Persembahan Mingguan Berhasil di Hapus');
    }
}
