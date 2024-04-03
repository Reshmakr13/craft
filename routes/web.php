<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use Modules\Ynotz\EasyAdmin\Services\RouteHelper;
use App\Http\Controllers\PageController;
use Modules\Ynotz\AppSettings\Http\Controllers\AppSettingsController;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/homecomponent', [PageController::class, 'homecomponent'])->name('homecomponent');
Route::get('/homedemo', function () {
    return view('pages.homedemo');});
Route::get('/header', function () {
        return view('pages.header');}); 
Route::get('/newpage', function () {
        return view('pages.newpage');});
Route::get('/contact', function () {
            return view('pages.contact');});
Route::get('/booking_stage_1', function () {
        return view('pages.bookingstage_1');})->name('bookingstage_1');
Route::get('/booking_stage_3', function () {
    return view('pages.bookingstage_3');})->name('bookingstage_2');
Route::get('/booking_stage_2', function () {
        return view('pages.bookingstage_2');})->name('bookingstage_3');
Route::post('/booking', function () {
    return view('pages.booking');})->name('booking');
Route::get('/booking', function () {
        return view('pages.booking');})->name('booking');
Route::get('/doctorinfo', function () {
    return view('pages.doctorinfo');})->name('doctorinfo');
Route::get('/homekochi', function () {
    return view('pages.home_kochi');})->name('homekochi');
    

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    RouteHelper::getEasyRoutes(
        modelName: 'AppSetting',
        controller: AppSettingsController::class
    );

    Route::get('/roles-permissions', [RoleController::class, 'rolesPermissions'])->name('roles.permissions');
    Route::post('/roles/permission-update', [RoleController::class, 'permissionUpdate'])->name('roles.update_permissions');
});

require __DIR__.'/auth.php';
