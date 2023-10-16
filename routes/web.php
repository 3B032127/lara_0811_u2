<?php

use Illuminate\Support\Facades\Route;

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

/*回傳view*/
/*Route::get('/', function () {
    return view('welcome');
}); */

/*回傳字串*/
/*Route::get('/', function () {
    return 'welcome';
}); */

/*return redirect*/
/*Route::get('r1', function () {
    return redirect('r2');
});

Route::get('r1', function() {
    return view('welcome');
}); */

Route::get('hello/{name}', function($name) {
    return 'Hello, '.$name;
});


