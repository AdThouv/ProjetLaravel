<?php
namespace App;

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
    return view('welcome');
});
Route::get('/greeting/{name}', function () {
    $name = request('name');
    return view('greeting', [
        'name' => $name
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/inscription', function () {
    return view('inscription');
});
Route::post('/inscription', function () {
    return 'Votre email est ' . request('email');
});
Route::resource('programs', 'ProgramController');