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
    if(setting('site.status')){
        return view(setting('site.template').'welcome');
    }
    return redirect('admin');
});

Route::get('about', function () {
    return view(setting('site.template').'about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('policies-privacy', function () {
    return view(setting('site.template').'policies-privacy');
});

Route::get('terms-use', function () {
    return view(setting('site.template').'terms-use');
});

Route::get('category/{slug}', function ($slug) {
    $category = App\Models\Category::with(['posts' => function($q){
                    $q->where('status', 'publicado')->orderBy('order')->orderBy('id', 'DESC')->orderBy('views', 'DESC')->where('deleted_at', NULL);
                }])->where('slug', $slug)->first();
    return view(setting('site.template').'category', compact('category'));
});

Route::get('post/{slug}', function ($slug) {
    $post = App\Models\Post::where('slug', $slug)->first();
    if(!$post){
        return view(setting('site.template').'errors.404');    
    }
    $post->views = $post->views +1;
    $post->update();
    return view(setting('site.template').'post', compact('post'));
});

Route::get('videos', function () {
    $videos = App\Models\Video::where('status', 'publicado')->orderBy('order')->orderBy('id', 'DESC')->orderBy('views', 'DESC')->where('deleted_at', null)->get();
    return view('videos', compact('videos'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Clear cache
Route::get('/admin/clear-cache', function() {
    Artisan::call('optimize:clear');
    return redirect('/admin/profile')->with(['message' => 'Cache eliminada.', 'alert-type' => 'success']);
})->name('clear.cache');
