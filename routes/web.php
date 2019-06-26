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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/contact', 'PagesController@contact');
Route::get('/blog', 'PagesController@blog');
Route::get('/single', 'PagesController@single');

Route::post('mensajes',function(){

	//enviar un correo
	$data = request()->all();
	//var_dump($data);
	Mail::send("emails.mensaje",$data,function($message)use($data){
		$message->from($data['Email'],$data['Name'])
		->to('jperez.ejemplo1@gmail.com','Juan')
		->subject($data['body']);				//*****ARREGLAR*****
	});
	return request()->all();
})->name('mensajes');
/*
Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/single', function () {
    return view('single');
});
*/