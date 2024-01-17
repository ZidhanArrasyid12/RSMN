<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index;
use App\Http\Controllers\Caridokter;
use App\Http\Controllers\Tentangkami;
use App\Http\Controllers\Fasilitas;
use App\Http\Controllers\Infokamar;
use App\Http\Controllers\Rawatinap;
use App\Http\Controllers\Laboratorium;
use App\Http\Controllers\Ugd;
use App\Http\Controllers\Poliklinik;
use App\Http\Controllers\Anak;
use App\Http\Controllers\Bedah;
use App\Http\Controllers\Dalam;
use App\Http\Controllers\Gigi;
use App\Http\Controllers\Jantung;
use App\Http\Controllers\Mata;
use App\Http\Controllers\Saraf;
use App\Http\Controllers\Tht;
use App\Http\Controllers\Amin;
use App\Http\Controllers\Fauzan;
use App\Http\Controllers\Husni;
use App\Http\Controllers\Thorik;
use App\Http\Controllers\Toni;
use App\Http\Controllers\Zidhan;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use App\Http\Controllers\Navbar;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Drhusni;
use App\Http\Controllers\Drzidhan;
use App\Http\Controllers\Dramin;
use App\Http\Controllers\Drtoni;
use App\Http\Controllers\Drthorik;
use App\Http\Controllers\Drfauzan;
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
    return view('welcome');
});

Route::get('/', [Index::class, 'index']);
Route::get('/caridokter', [Caridokter::class, 'caridokter']);
Route::get('/tentangkami', [Tentangkami::class, 'tentangkami']);
Route::get('/fasilitas', [Fasilitas::class, 'fasilitas']);
Route::get('/infokamar', [Infokamar::class, 'infokamar']);
Route::get('/rawatinap', [Rawatinap::class, 'rawatinap']);
Route::get('/laboratorium', [Laboratorium::class, 'laboratorium']);
Route::get('/ugd', [Ugd::class, 'ugd']);
Route::get('/poliklinik', [Poliklinik::class, 'poliklinik']);
Route::get('/anak', [Anak::class, 'anak']);
Route::get('/bedah', [Bedah::class, 'bedah']);
Route::get('/dalam', [Dalam::class, 'dalam']);
Route::get('/gigi', [Gigi::class, 'gigi']);
Route::get('/jantung', [Jantung::class, 'jantung']);
Route::get('/mata', [Mata::class, 'mata']);
Route::get('/saraf', [Saraf::class, 'saraf']);
Route::get('/tht', [Tht::class, 'tht']);
Route::get('/amin', [Amin::class, 'amin']);
Route::get('/fauzan', [Fauzan::class, 'fauzan']);
Route::get('/husni', [Husni::class, 'husni']);
Route::get('/thorik', [Thorik::class, 'thorik']);
Route::get('/toni', [Toni::class, 'toni']);
Route::get('/zidhan', [Zidhan::class, 'zidhan']);
Route::get('/login', [Login::class, 'login']);
Route::get('/register', [Register::class, 'register']);
Route::get('/drhusni', [Drhusni::class, 'drhusni']);
Route::get('/drzidhan', [Drzidhan::class, 'drzidhan']);
Route::get('/drthorik', [DrThorik::class, 'drthorik']);
Route::get('/drtoni', [DrToni::class, 'drtoni']);
Route::get('/drfauzan', [DrFauzan::class, 'drfauzan']);
Route::get('/dramin', [DrAmin::class, 'dramin']);

Route::get('/student/create', [StudentController::class, 'create']);


Route::post('/student', [StudentController::class, 'store'])
->name('student.store');
Route::get('/student/index', [StudentController::class, 'index'])
->name('student.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


