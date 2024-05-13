<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});
// Route::post('/add', function () {
// //  dd(request()->input());
//  if (request()->has('name')) {
//     $name = request()->input('name');
//     if (empty($name)) {
//         return redirect()->back()->withInput()->with('error', 'Name is empty');
//     }
//  }
// });

// Required Parameters
// Route::get('/user/{id}', function (string $id) {
//     return 'User '.$id;
// });
Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
})->where('id', '[A-Za-z]+'); // regex pattern দিইয়ে বলে দিলাম id  তে শুধু টেক্সট আসবে অন্য কিছু আসলে রাউট পাবেনা
// সেইম ভাবে নাম্বার দিলেও শুধু নাম্বার নিয়ে কাজ করবে


// Parameters and Dependency Injection
// Note : you should list your route parameters after your dependencies:

// Route::get('/profile/{id}', function (Request $request, string $id) {
//     dd($request->all());
//     return 'profile '.$id;
// });


// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     // ...
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


// গ্লোবাল ভাবে রাউট গুলাতে প্যাটার্ন দিতে চাইলে এই সেকশনে গিয়ে কিভাবে এপ্লাই করে দেখা যাবে https://laravel.com/docs/11.x/routing#parameters-global-constraints


Route::get('/search/{search}', function (string $search) {
    return $search;
})->where('search', '.*');
