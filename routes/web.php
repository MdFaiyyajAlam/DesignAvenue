<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', [ContactController::class,'index'])->name('index');
Route::post('/contact-store', [ContactController::class,'contactStore'])->name('contactStore');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('admin')->middleware('auth')->group(function () {

Route::get('/contact-view',[ContactController::class,'contactView'])->name('contactView');
Route::delete('/destroyContact/{contact}', [ContactController::class,'destroyContact'])->name('destroyContact');

});
