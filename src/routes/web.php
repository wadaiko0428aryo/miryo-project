<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MiryoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// ログイン処理
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

// ログアウト処理
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::get('/create_item', [AdminDashboardController::class, 'create_item'])->name('create_item');

    Route::post('/create_item', [AdminDashboardController::class, 'store_item'])->name('store_item');

    Route::get('/edit_item/{item_id}', [AdminDashboardController::class, 'edit_item'])->name('edit_item');

    Route::post('/delete_item/{item_id}', [AdminDashboardController::class, 'delete_item'])->name('delete_item');


});



Route::middleware('auth')->group(function()
{
    Route::get('/', [TopController::class, 'top_page'])->name('top');


    Route::get('/miryo', [MiryoController::class, 'miryo_page'])->name('miryo');


    Route::get('/blog', [BlogController::class, 'blog_page'])->name('blog');
    Route::get('/blog/detail/{blog_id}', [BlogController::class, 'blog_detail_page'])->name('blog_detail');


    Route::get('/items', [ItemController::class, 'items_page'])->name('items');
    Route::get('/items/detail/{item_id}', [ItemController::class, 'items_detail_page'])->name('item_detail');
    Route::get('/items/detail/purchase/{item_id}', [ItemController::class, 'item_purchase_page'])->name('purchase');



    Route::get('/events', [EventController::class, 'events_page'])->name('events');


    Route::get('/my_page', [MyController::class, 'my_page'])->name('my_page');
    Route::get('/my_page/my_blog', [MyController::class, 'my_blog'])->name('my_blog');
    Route::get('/my_page/my_event', [MyController::class, 'my_event'])->name('my_event');
    Route::get('/my_page/my_items', [MyController::class, 'my_items'])->name('my_items');


});
