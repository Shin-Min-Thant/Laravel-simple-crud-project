<?php

use Illuminate\Support\Facades\Route;

// Route::get('/',function(){
//     return view('Layout.create');
// })->name("create#page");


// Route::get('/read',function(){
//     return view('Layout.read');

// })->name("read#page");

use App\Http\Controllers\CustomerController;

//create page
Route::get('/',[CustomerController::class,'createPage'])->name('create#page');

//create
Route::post('/create',[CustomerController::class,'create'])->name("create");

//read page
Route::get('/read',[CustomerController::class,'readPage'])->name('read');

//update page
Route::get('/updatePage/{id}',[CustomerController::class,'updatePage'])->name('update#page');

//update
Route::post('/update/{id}',[CustomerController::class,'update'])->name('update');

//delete
Route::get('/delete/{id}',[CustomerController::class,'delete'])->name('delete');

