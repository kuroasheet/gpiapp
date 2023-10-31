<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BaptismController;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\InventController;
use App\Http\Controllers\OfferingController;
use App\Http\Controllers\MonthController;
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

Route::get('/', function () {
$jumlahjemaat = Member::count();
$jumlahjemaatlaki = Member::where('jeniskelamin','Laki-laki')->count();
$jumlahjemaatperempuan = Member::where('jeniskelamin','Perempuan')->count();
$jumlahbaptis = Baptism::count();

    return view('welcome',compact('jumlahjemaat','jumlahjemaatlaki','jumlahjemaatperempuan','jumlahbaptis'));
});

Route::get('/jemaat',[MemberController::class, 'index'])->name('jemaat');
Route::get('/member/tambahjemaat',[MemberController::class, 'tambahjemaat'])->name('tambahjemaat');
Route::post('/member/insertdata',[MemberController::class, 'insertdata'])->name('insertdata');
Route::get('/member/tampilkandata/{id}',[MemberController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/member/updatedata/{id}',[MemberController::class, 'updatedata'])->name('updatedata');
Route::get('/member/delete/{id}',[MemberController::class, 'delete'])->name('delete');

Route::get('/baptis', [BaptismController::class, 'index'])->name('baptis');
Route::get('/baptism/tambahbaptis',[BaptismController::class, 'tambahbaptis'])->name('tambahbaptis');
Route::post('/baptism/insertdata',[BaptismController::class, 'insertdata'])->name('insertdata');
Route::get('/baptism/tampilkandata/{id}',[BaptismController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/baptism/updatedata/{id}',[BaptismController::class, 'updatedata'])->name('updatedata');
Route::get('/baptism/delete/{id}',[BaptismController::class, 'delete'])->name('delete');

Route::get('/nikah',[WeddingController::class, 'index'])->name('nikah');
Route::get('/wedding/tambahnikah',[WeddingController::class, 'tambahnikah'])->name('tambahnikah');
Route::post('/wedding/insertdata',[WeddingController::class, 'insertdata'])->name('insertdata');
Route::get('/wedding/tampilkandata/{id}',[WeddingController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/wedding/updatedata/{id}',[WeddingController::class, 'updatedata'])->name('updatedata');
Route::get('/wedding/delete/{id}',[WeddingController::class, 'delete'])->name('delete');

Route::get('/inventaris',[InventController::class, 'index'])->name('inventaris');
Route::get('/invent/tambahinventaris',[InventController::class, 'tambahinventaris'])->name('tambahinventaris');
Route::post('/invent/insertdata',[InventController::class, 'insertdata'])->name('insertdata');
Route::get('/invent/tampilkandata/{id}',[InventController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/invent/updatedata/{id}',[InventController::class, 'updatedata'])->name('updatedata');
Route::get('/invent/delete/{id}',[InventController::class, 'delete'])->name('delete');

Route::get('/persembahan',[OfferingController::class, 'index'])->name('persembahan');
Route::get('/offering/tambahperming',[OfferingController::class, 'tambahperming'])->name('tambahperming');
Route::post('/offering/insertdata',[OfferingController::class, 'insertdata'])->name('insertdata');
Route::get('/offering/tampilkandata/{id}',[OfferingController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/offering/updatedata/{id}',[OfferingController::class, 'updatedata'])->name('updatedata');
Route::get('/offering/delete/{id}',[OfferingController::class, 'delete'])->name('delete');

Route::get('/bulan',[MonthController::class, 'index'])->name('bulan');
Route::get('/month/tambahbulan',[MonthController::class, 'tambahbulan'])->name('tambahbulan');
Route::post('/month/insertdata',[MonthController::class, 'insertdata'])->name('insertdata');
Route::get('/month/tampilkandata/{id}',[MonthController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/month/updatedata/{id}',[MonthController::class, 'updatedata'])->name('updatedata');
Route::get('/month/delete/{id}',[MonthController::class, 'delete'])->name('delete');