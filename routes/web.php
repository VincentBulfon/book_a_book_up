<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TextualContentController;
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

//student route group
//add verify to routes to add verified email auth
Route::middleware(['student', 'auth'])->group(function () {
    Route::get('/', function () {
        $pq['bookInfos'] = request()->input('bookInfo') ?? null;
        $pq['sortField'] = request()->input('sortField') ?? 'title';
        $pq['sortOrder'] = request()->input('sortOrder') ?? 'asc';
        $pq['currentOrder'] = request()->input('currentOrder') ?? null;
        $pq['searchfor']= request()->input('searchfor') ?? '';
        return view('student.create-order', ['pq' => $pq]);
    })->name('studentHome');
    Route::get('/student/book/{id}', function () {
        return view('student.view-book');
    })->name('viewBook');
    Route::get('/student/orders', function () {
        return view('student.orders-done');
    })->name('studentOrders');
    Route::get('/student/pay', function () {
        return view('student.pay');
    })->name('studentPay');
    Route::get('/student/order/show/{id}', function () {
        return view('student.show-order');
    })->name('studentShowOrder');
    Route::get('student/view/book', function () {
        return view('student.view-book-infos');
    })->name('viewBookInfos');
    Route::post('/order/update', [OrderController::class, 'updateBooks'])->name('updateOrderBooks');
    Route::post('/order/reset', [OrderController::class, 'destroy'])->name('resetOrder');
    Route::post('/order/store', [OrderController::class, 'store'])->name('storeOrder');
});
//admin route groupe
Route::middleware(['admin', 'auth'])->group(function () {
    Route::get('/admin/home', [AdminDashboardController::class, 'index'])->name('adminHome');
    Route::get('/admin/book-list', [BookController::class, 'index'])->name('bookList');
    Route::get('/admin/archived-orders', [AdminDashboardController::class, 'showArchived'])->name('archivedOrders');
    //where constraint is here to prevent the modification of other texts by changing the id in this route.
    Route::get('/admin/payement-details/{id}', [TextualContentController::class, 'show'])->where('id', '[1]')->name('payementDetails');
    Route::get('/admin/book/{id}/edit', [BookController::class, 'edit'])->name('editBook');
    Route::get('/admin/book/add', [BookController::class, 'create'])->name('createBook');
    Route::get('/admin/book/{id}', [BookController::class, 'show'])->name('showBook');
    Route::get('/admin/order/{id}', [OrderController::class, 'show'])->name('showOrder');
    //show a specific order recieved by a the admin

    Route::post('/admin/order/{id}/update', [OrderController::class, 'update'])->name('updateOrder');
    Route::post('/admin/book/{id}/update', [BookController::class,'update'])->name('updateBook');
    Route::post('/admin/book/{id}/updateInfos', [BookController::class,'updateBookInfos'])->name('updateBookInfos');
    Route::post('/admin/book/store', [BookController::class, 'store'])->name('storeBook');
    Route::post('/admin/payement-details/{id}/update', [TextualContentController::class, 'update'])->where('id', '[1]')->name('payementDetailsUpdate');
});
