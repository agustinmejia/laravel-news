<?php

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

Route::get('login', function () {
    return redirect('admin/login');
})->name('login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('category/{slug}', function ($slug) {
    return view('category', compact('slug'));
});

Route::get('post/{slug}', function ($slug) {
    $post = App\Models\Post::where('slug', $slug)->first();
    $post->views = $post->views +1;
    $post->update();
    return view('post', compact('post'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Clear cache
Route::get('/admin/clear-cache', function() {
    Artisan::call('optimize:clear');
    return redirect('/admin/profile')->with(['message' => 'Cache eliminada.', 'alert-type' => 'success']);
})->name('clear.cache');
