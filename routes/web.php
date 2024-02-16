<?php

use App\Http\Controllers\Welcome;
use App\Livewire\FormAddIventaris;
use App\Livewire\FormEditIventaris;
use App\Livewire\FormEditPeminjaman;
use App\Livewire\Inventaris;
use App\Livewire\Peminjaman;
use App\Livewire\Welcome as LivewireWelcome;
use Illuminate\Support\Facades\Route;

use function Livewire\name;

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

Route::get('/', function(){
    if(!auth())
    {
        return redirect('/login');
    }else{
        return redirect('/dashboard');
    }
});

Route::get('dashboard', LivewireWelcome::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/inventaris', Inventaris::class)
    ->middleware(['auth'])
    ->name('inventaris');
Route::get('/inventaris/add', FormAddIventaris::class)
    ->middleware(['auth'])
    ->name('addInventaris');
Route::get('/inventaris/edit/{id}', FormEditIventaris::class)
    ->middleware(['auth'])
    ->name('editInventaris');

Route::get('/peminjaman', Peminjaman::class)
    ->middleware(['auth'])
    ->name('peminjaman');
Route::get('/peminjaman/edit/{id}', FormEditPeminjaman::class)
    ->middleware(['auth'])
    ->name('editPeminjaman');

require __DIR__.'/auth.php';
