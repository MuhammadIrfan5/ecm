<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
    return redirect('login');
//    return view('login');
});


Auth::routes(['register' => false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/', function () {
//    return view('welcome');
//});
Route::middleware(['auth'])->group(function () {

//    Route::fallback(function () {
//        abort(403, 'Unauthorized action.');
//    });

    Route::get('/home', function () {
        //    return view('welcome');
        return view('pages.index');
    })->name('dashboard.v1');

    Route::group(['prefix' => 'Profile','as' => 'profile.'], function() {
        Route::get('profile/{id}', [\App\Http\Controllers\UserController::class, 'edit'])->name('my_profile');
        Route::post('/update_profile/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('update_profile');
        Route::get('/create', [\App\Http\Controllers\UserController::class, 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\UserController::class, 'store'])->name('store');
    });

    Route::group(['prefix' => 'File','as' => 'file.'], function() {
        Route::get('create', [\App\Http\Controllers\FileController::class, 'create'])->name('create');
        Route::post('store', [\App\Http\Controllers\FileController::class, 'store'])->name('store');
        Route::get('policy_files', [\App\Http\Controllers\FileController::class, 'get_policy_files'])->name('policy_files');
        Route::get('add_meta', [\App\Http\Controllers\FileController::class, 'add_meta_view'])->name('add_meta');
        Route::post('add_meta_value', [\App\Http\Controllers\FileController::class, 'add_meta'])->name('add_meta_value');
        Route::get('search', [\App\Http\Controllers\FileController::class, 'search_view'])->name('search');
        Route::post('search_files', [\App\Http\Controllers\FileController::class, 'search_files'])->name('search_files');
    });
    Route::get('index', [\App\Http\Controllers\FileController::class, 'index'])->name('all_files');

    Route::get('/analytics', function () {
        //    return view('welcome');
        return view('Pages.Analytics.analytics');
    })->name('analytics');

    Route::get('/panels', function () {
        //    return view('welcome');
        return view('Pages.Interface.panels');
    })->name('panels');

    Route::get('/typography', function () {
        //    return view('welcome');
        return view('Pages.Interface.typography');
    })->name('typography');

    Route::get('/buttons', function () {
        //    return view('welcome');
        return view('Pages.Interface.buttons');
    })->name('buttons');

    Route::get('/components', function () {
        //    return view('welcome');
        return view('Pages.Interface.components');
    })->name('components');

    Route::get('/alerts', function () {
        //    return view('welcome');
        return view('Pages.Interface.alerts');
    })->name('alerts');

    Route::get('/modals', function () {
        //    return view('welcome');
        return view('Pages.Interface.modals');
    })->name('modals');

    Route::get('/loading-buttons', function () {
        //    return view('welcome');
        return view('Pages.Interface.loading-buttons');
    })->name('loading-buttons');

    Route::get('/draggable', function () {
        //    return view('welcome');
        return view('Pages.Interface.draggable');
    })->name('draggable');

    Route::get('/code-editor', function () {
        //    return view('welcome');
        return view('Pages.Interface.code-editor');
    })->name('code-editor');

    Route::get('/nested-list', function () {
        //    return view('welcome');
        return view('Pages.Interface.nested-list');
    })->name('nested-list');

    Route::get('/tour', function () {
        //    return view('welcome');
        return view('Pages.Interface.tour');
    })->name('tour');

    Route::get('/icons', function () {
        //    return view('welcome');
        return view('Pages.Interface.icon-library');
    })->name('icons');

    Route::get('/contacts', function () {
        //    return view('welcome');
        return view('Pages.AppViews.contact');
    })->name('contacts');

    Route::get('/projects', function () {
        //    return view('welcome');
        return view('Pages.AppViews.projects');
    })->name('projects');

});








