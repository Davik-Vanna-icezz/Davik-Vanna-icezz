<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return 'hehehehehheehh';
});

Route::match(['get' , 'post'],'/match',function(){
    return 'match route 1000 !!!!';
});

Route::get('/user/{id}', function ($id) {
    return 'User Id :'.$id;
})->where('id','[0-9]+');

Route::get('/hello',function(){
    return view('hello');
});
Route::get('/',function(){
    return view('master.layout');
});
Route::get('/category',function(){
    return view('Category.Category-list');
});

Route::get('/category/Create',function(){
    return view('Category.Category-add');
});