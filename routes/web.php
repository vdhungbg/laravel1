<?php

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

    $links = \App\Link::all();

    // return view('welcome');

    // with()
    return view('welcome')->with('links', $links);

    // dynamic method to name the variable
    // return view('welcome')->withLinks($links);

    // return view('welcome', ['links' => $links]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/submit', function () {

    $links = \App\Link::all();
    return view('welcome', ['links' => $links]);

    // $data = $request->validate([
    //     'title' => 'required|max:255',
    //     'url' => 'required|url|max:255',
    //     'description' => 'required|max:255',
    // ]);

    // $link = tap(new App\Link($data))->save();

    // return redirect('/');
});