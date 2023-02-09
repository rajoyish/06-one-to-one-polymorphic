<?php

use App\Http\Controllers\IndexImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Image;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $images = Image::with('imageable')
    //     ->get();

    // // return $images;

    // foreach ($images as $image) {

    //     if ($image->imageable_type === 'App\Models\User') {
    //         echo $image->imageable->name;
    //     }
    // }

    return view('welcome');
});

Route::resource('posts', PostController::class);
Route::get('images', IndexImageController::class)->name('images');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
