<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PrintController;
use App\Http\Controllers\Admin\LetterController;
use App\Http\Controllers\Admin\SenderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;

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

Route::get('/storage-link', function () {
    $targetFolder = base_path() . '/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});

Route::get('/clear-cache', function () {
    Artisan::call('route:cache');
});

Route::get('/', [LoginController::class, 'index']);

// Authentication
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Admin
Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('/department', DepartmentController::class);
        Route::resource('/sender', SenderController::class);
        Route::resource('/letter', LetterController::class, [
            'except' => ['show']
        ]);
        Route::get('letter/kriteria-1', [LetterController::class, 'kriteria1_mail'])->name('kriteria-1');
        Route::get('letter/kriteria-2', [LetterController::class, 'kriteria2_mail'])->name('kriteria-2');
        Route::get('letter/kriteria-3', [LetterController::class, 'kriteria3_mail'])->name('kriteria-3');
        Route::get('letter/kriteria-4', [LetterController::class, 'kriteria4_mail'])->name('kriteria-4');
        Route::get('letter/kriteria-5', [LetterController::class, 'kriteria5_mail'])->name('kriteria-5');
        Route::get('letter/kriteria-6', [LetterController::class, 'kriteria6_mail'])->name('kriteria-6');
        Route::get('letter/kriteria-7', [LetterController::class, 'kriteria7_mail'])->name('kriteria-7');
        Route::get('letter/kriteria-8', [LetterController::class, 'kriteria8_mail'])->name('kriteria-8');
        Route::get('letter/kriteria-9', [LetterController::class, 'kriteria9_mail'])->name('kriteria-9');

        Route::get('letter/surat/{id}', [LetterController::class, 'show'])->name('detail-surat');
        Route::get('letter/download/{id}', [LetterController::class, 'download_letter'])->name('download-surat');

        //print
        Route::get('print/kriteria-1', [PrintController::class, 'kriteria1'])->name('print-kriteria-1');
        Route::get('print/kriteria-2', [PrintController::class, 'kriteria2'])->name('print-kriteria-2');
        Route::get('print/kriteria-3', [PrintController::class, 'kriteria3'])->name('print-kriteria-3');
        Route::get('print/kriteria-4', [PrintController::class, 'kriteria4'])->name('print-kriteria-4');
        Route::get('print/kriteria-5', [PrintController::class, 'kriteria5'])->name('print-kriteria-5');
        Route::get('print/kriteria-6', [PrintController::class, 'kriteria6'])->name('print-kriteria-6');
        Route::get('print/kriteria-7', [PrintController::class, 'kriteria7'])->name('print-kriteria-7');
        Route::get('print/kriteria-8', [PrintController::class, 'kriteria8'])->name('print-kriteria-8');
        Route::get('print/kriteria-9', [PrintController::class, 'kriteria9'])->name('print-kriteria-9');

        Route::resource('user', UserController::class);
        Route::resource('setting', SettingController::class, [
            'except' => ['show']
        ]);
        Route::get('setting/password', [SettingController::class, 'change_password'])->name('change-password');
        Route::post('setting/upload-profile', [SettingController::class, 'upload_profile'])->name('profile-upload');
        Route::post('change-password', [SettingController::class, 'update_password'])->name('update.password');
    });
