<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/buku', [PageController::class, 'daftarBuku']);
