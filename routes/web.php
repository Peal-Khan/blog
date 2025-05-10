<?php

use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('layouts');
// });

// Route::get('/', function () {
//     $xname="Jahidul Islam";
//     $xtamim="Hi ! I am Tamim";
//     return view('index',['name'=>$xname,'tamim'=>$xtamim]);
// })->name('/');

Route::get('/', [PageController::class, 'home'])->name('/');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/contact-us', [PageController::class, 'contact'])->name('contact-us');

Route::get('/post-details', [PageController::class, 'post'])->name('post-details');

Route::get('/dash-board', [PageController::class, 'dash'])->name('dash-board');

Route::get('/dash-board_create', [PageController::class, 'category'])->name('create');

Route::post('/category/store', [PageController::class, 'store'])->name('category_store');

Route::get('/posts', [PageController::class, 'post_index'])->name('post_index');

Route::get('/posts/create', [PageController::class, 'post_create'])->name('post_create');

Route::post('/posts/store', [PageController::class, 'Post_store'])->name('post_store');

Route::get('/post/edit/{post}', [PageController::class, 'post_edit'])->name('post_edit');

Route::post('/post/update/{post}', [PageController::class, 'post_update'])->name('post_update');

Route::post('/post/delete/{post}', [PageController::class, 'post_delete'])->name('post_delete');

Route::get('abouts', [PageController::class, 'about_index'])->name('about_index');

Route::get('/about/create', [PageController::class, 'post_about'])->name('about_create');

Route::post('/about/store', [PageController::class, 'about_store'])->name('about_store');

Route::get('/abouts/edit/{id}', [PageController::class, 'aboutEdit'])->name('about.edit');

Route::post('/abouts/update/{about}', [PageController::class, 'about_update'])->name('about_update');

Route::post('/abouts/delete/{about}', [PageController::class, 'about_delete'])->name('about_delete');

