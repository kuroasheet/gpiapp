<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\UserController;
use App\Models\Galeri;
use App\Models\Pengaturan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BaptismController;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\InventController;
use App\Http\Controllers\OfferingController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\AuthController;
use App\Models\Month;
use App\Models\Offering;
use App\Models\Invent;
use App\Models\Wedding;
use App\Models\Baptism;
use App\Models\Member;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin'])->name('login.do');

Route::middleware('auth')->group(function(){
    Route::get('/', function () {
    $jumlahjemaat = Member::count();
    $jumlahjemaatlaki = Member::where('jeniskelamin','Laki-laki')->count();
    $jumlahjemaatperempuan = Member::where('jeniskelamin','Perempuan')->count();
    $jumlahbaptis = Baptism::count();
    $galeri = Galeri::all();
    $pengaturan = Pengaturan::get()->first();

        return view('welcome',compact('jumlahjemaat','jumlahjemaatlaki','jumlahjemaatperempuan','jumlahbaptis', 'galeri', 'pengaturan'));
    })->name('dashboard');

    Route::get('/jemaat',[MemberController::class, 'index'])->name('jemaat');
    Route::get('/member/tambahjemaat',[MemberController::class, 'tambahjemaat'])->name('tambahjemaat');
    Route::post('/member/insertdata',[MemberController::class, 'insertdata'])->name('insertdata');
    Route::get('/member/tampilkandata/{id}',[MemberController::class, 'tampilkandata'])->name('tampilkandata');
    Route::post('/member/updatedata/{id}',[MemberController::class, 'updatedata'])->name('updatedata');
    Route::get('/member/delete/{id}',[MemberController::class, 'delete'])->name('delete');

    Route::get('/baptis', [BaptismController::class, 'index'])->name('baptis');
    Route::get('/baptism/tambahbaptis',[BaptismController::class, 'tambahbaptis'])->name('tambahbaptis');
    Route::post('/baptism/insertdata',[BaptismController::class, 'insertdata'])->name('baptism.insertdata');
    Route::get('/baptism/tampilkandata/{id}',[BaptismController::class, 'tampilkandata'])->name('baptism.tampilkandata');
    Route::post('/baptism/updatedata/{id}',[BaptismController::class, 'updatedata'])->name('baptism.updatedata');
    Route::get('/baptism/delete/{id}',[BaptismController::class, 'delete'])->name('baptism.delete');

    Route::get('/nikah',[WeddingController::class, 'index'])->name('nikah');
    Route::get('/wedding/tambahnikah',[WeddingController::class, 'tambahnikah'])->name('tambahnikah');
    Route::post('/wedding/insertdata',[WeddingController::class, 'insertdata'])->name('wedding.insertdata');
    Route::get('/wedding/tampilkandata/{id}',[WeddingController::class, 'tampilkandata'])->name('wedding.tampilkandata');
    Route::post('/wedding/updatedata/{id}',[WeddingController::class, 'updatedata'])->name('wedding.updatedata');
    Route::get('/wedding/delete/{id}',[WeddingController::class, 'delete'])->name('wedding.delete');

    Route::get('/inventaris',[InventController::class, 'index'])->name('inventaris');
    Route::get('/invent/tambahinventaris',[InventController::class, 'tambahinventaris'])->name('tambahinventaris');
    Route::post('/invent/insertdata',[InventController::class, 'insertdata'])->name('invent.insertdata');
    Route::get('/invent/tampilkandata/{id}',[InventController::class, 'tampilkandata'])->name('invent.tampilkandata');
    Route::post('/invent/updatedata/{id}',[InventController::class, 'updatedata'])->name('invent.updatedata');
    Route::get('/invent/delete/{id}',[InventController::class, 'delete'])->name('invent.delete');

    Route::get('/persembahan',[OfferingController::class, 'index'])->name('persembahan');
    Route::get('/offering/tambahperming',[OfferingController::class, 'tambahperming'])->name('tambahperming');
    Route::post('/offering/insertdata',[OfferingController::class, 'insertdata'])->name('offering.insertdata');
    Route::get('/offering/tampilkandata/{id}',[OfferingController::class, 'tampilkandata'])->name('offering.tampilkandata');
    Route::post('/offering/updatedata/{id}',[OfferingController::class, 'updatedata'])->name('offering.updatedata');
    Route::get('/offering/delete/{id}',[OfferingController::class, 'delete'])->name('offering.delete');

    Route::get('/bulan',[MonthController::class, 'index'])->name('bulan');
    Route::get('/month/tambahbulan',[MonthController::class, 'tambahbulan'])->name('tambahbulan');
    Route::post('/month/insertdata',[MonthController::class, 'insertdata'])->name('month.insertdata');
    Route::get('/month/tampilkandata/{id}',[MonthController::class, 'tampilkandata'])->name('month.tampilkandata');
    Route::post('/month/updatedata/{id}',[MonthController::class, 'updatedata'])->name('month.updatedata');
    Route::get('/month/delete/{id}',[MonthController::class, 'delete'])->name('month.delete');

    Route::middleware('sekMulti')->group(function(){
        Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
        Route::post('/galeri', [GaleriController::class, 'save'])->name('galeri.save');
        Route::put('/galeri/{id}', [GaleriController::class, 'update'])->name('galeri.update');
        Route::delete('/galeri/{id}', [GaleriController::class, 'delete'])->name('galeri.delete');

        Route::prefix('pengaturan')->group(function(){
            Route::get('/', [PengaturanController::class, 'index'])->name('pengaturan');
            Route::post('/kontak', [PengaturanController::class, 'saveKontak'])->name('pengaturan.saveKontak');
            Route::post('/sejarah', [PengaturanController::class, 'saveSejarah'])->name('pengaturan.saveSejarah');
        });

        Route::prefix('user')->group(function(){
            Route::get('/', [UserController::class, 'index'])->name('user');
            Route::post('/', [UserController::class, 'create'])->name('user.post');
            Route::put('/{id}', [UserController::class, 'update'])->name('user.put');
            Route::delete('/{id}', [UserController::class, 'delete'])->name('user.delete');
        });
    });


    Route::get('logout', function(){
        \Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});
