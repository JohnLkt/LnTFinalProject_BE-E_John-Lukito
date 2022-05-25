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

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('landing');
})->middleware(['auth'])->name('dashboard');



// // CRUD item

// // go to create item page
// Route::get('/add', 'App\Http\Controllers\Items_Controller@add')->middleware('admin')->name('add');
// // create the new item from form data
// Route::post('/add_item', 'App\Http\Controllers\Items_Controller@add_item')->name('add_item');
// // display all items (admin view)
// Route::get('/admin-inventory', 'App\Http\Controllers\Items_Controller@show_item_inventory')->name('show_item_inventory');
// // go to edit page for item from admin view page
// Route::get('/admin-edit/{id}', 'App\Http\Controllers\Items_Controller@update_item')->name('update_item');
// // edit the item data
// Route::PATCH('/editing/{id}', 'App\Http\Controllers\Items_Controller@admin_editing')->name('updating_item');
// // delete item from inventory
// Route::delete('/delete/{id}', 'App\Http\Controllers\Items_Controller@delete_item')->name('updating_item');

require __DIR__.'/auth.php';
