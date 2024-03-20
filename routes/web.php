<?php

use App\Filament\Resources\ContactResource\Pages\EditContact;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [EditContact::class, 'show']); //menjadi kontroller utana

//cara menambahkan storage ink dari route web.php di laravel
Route::get('/storage-link', function () {
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder,$linkFolder);
});

//route untuk membuat migrasi dari web
Route::get('/migrate', function () {
    try {
        // Jalankan perintah migrasi
        Artisan::call('migrate', ['--force' => true]); // '--force' digunakan untuk menjalankan di production

        return response()->json(['success' => true, 'message' => 'Migrasi berhasil dijalankan.']);
    } catch (Exception $e) {
        return response()->json(['success' => false, 'message' => 'Migrasi gagal: ' . $e->getMessage()]);
    }
});