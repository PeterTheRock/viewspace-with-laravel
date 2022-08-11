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
//Code below points to the views folder welcome page
Route::get('/viewspace', function () {
    return view('viewspace');
});

//Code below is an array for the views folder
Route::get('/viewspace', function () {
   
        $dev=['dev'=>'Built using Laravel'];
        $internet=[
            ['type'=>'Internet','base'=>'Chat'],
            ['type'=>'Cloud','base'=>'Send Email'],
            ['type'=>'Networking','base'=>'Check online friends']
        ];
        
    return view('viewspace', ['internet'=>$internet]);
});

