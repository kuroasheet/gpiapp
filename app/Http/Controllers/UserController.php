<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        $data['user'] = User::all();
        // $data['user'] = User::where('id', '!=', $user->id);
        return view('user.index', $data);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'level' => 'required',
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $data['password'] = Hash::make($request->password);
        if (User::create($data)) {
            return redirect()->back()->with('success', ' Data user Berhasil di Tambahkan');
        }
        return redirect()->back()->with('danger', ' Data user gagal di Tambahkan');
    }
    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            'level' => 'required',
            'nama' => 'required',
            'username' => 'required'
        ]);

        if($request->input('password'))
        {
            $data['password'] = Hash::make($request->password);
        }
        if (User::findOrFail($id)->update($data)) {
            return redirect()->back()->with('success', ' Data user Berhasil di ubah');
        }
        return redirect()->back()->with('danger', ' Data user gagal di ubah');
    }

    public function delete(Request $request, int $id)
    {
        $user = User::findOrFail($id);
        if($user->delete())
        {
            return redirect()->back()->with('success','User berhasil dihapus.');
        }
        return redirect()->back()->with('error','User gagal dihapus.');
    }
}
