<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\ParameterController;


Route::get('/', HomeController::class)->name('home');
Route::get('/helper', [HelperController::class, 'index'])->name('helper.index');
Route::post('/helper', [HelperController::class, 'create'])->name('helper.create');
Route::get('post/{slug}', [PostController::class, 'show'])->name('post.show');
Route::get('post/edit/{slug}', [PostController::class, 'edit'])->name('post.edit');
Route::put('post/update/{post}', [PostController::class, 'update'])->name('post.update');

Route::get('/myprompts/{id}', [PostController::class, 'index'])->name('post.index');
Route::get('about-us', function() {return view('about-us');})->name('about-us');
Route::get('/resources/guidance-scale', function() {return view('resources/guidance-scale');})->name('resources.guidance-scale');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',
])->group(function () {
    // Verified users can visit.
});

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', 'App\Http\Controllers\Admin\AdminDashboardController@index')->name('admin.dashboard');
    Route::resource('/admin/parameters', 'App\Http\Controllers\Admin\ParameterController');
    Route::resource('/admin/users', 'App\Http\Controllers\Admin\UserController');
    Route::resource('/admin/posts', 'App\Http\Controllers\Admin\PostsController');
});


// Livewire::setScriptRoute(function ($handle) {
//     return Route::get('dalle-helper-project/public/livewire/livewire.js', $handle);
//     });
// Livewire::setUpdateRoute(function ($handle) {
// return Route::post('dalle-helper-project/public/livewire/update', $handle)->name('update');
// });


// Parameter related routes
// Route::put('/edit-parameter/{parameter}', [ParameterController::class, 'updateParam'])->name('parameters.updateParam');
// Route::delete('/delete-parameter/{parameter}', [ParameterController::class, 'deleteParam'])->name('parameters.deleteParam');