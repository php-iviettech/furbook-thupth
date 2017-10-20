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
    return 'hellophp';
});

Route::get('about', function (){
    $crop = 'iviettech';
    return view('about',['crop'=> $crop]);
});
Route::get('/breed/{name}', function ($name){
    $breed = Furbook\Breed::with('cats')
    ->whereName($name)
        ->first();
    //dd($breed);
    return view('cats.index' )
        ->with('breed', $breed)
        ->with('cats',$breed->cats);


});

Route::resource('cats','CatController');
