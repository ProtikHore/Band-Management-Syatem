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

Route::get('/','HomeController@index')->name('home.index');
Route::get('/register','AccountController@index')->name('account.index');
Route::post('/register','AccountController@store')->name('account.store');
Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@checkLogin')->name('login.Check');
Route::get('/showsongs/{id}','fileController@showsong')->name('file.showsong');

Route::group(['middleware' => ['SessionCheck']],function (){
    Route::get('/accounts/{id}', 'AccountController@show')->name('account.show');
    Route::get('/update/{id}', 'AccountController@edit')->name('account.edit');
    Route::post('/update/{id}', 'AccountController@update')->name('account.update');
    Route::get('/logout','LoginController@destroy')->name('login.destroy');
    Route::get('/upload','fileController@index')->name('file.index');
    Route::post('/upload','fileController@store')->name('file.index');
    Route::get('/usersong/{id}','fileController@show')->name('file.show');
    
    /*Ticket purchase*/
    Route::get('/band/login/bandd/linkinpark/concert/ticket/{cid}', 'TicketController@index')->name('ticket.book');
    Route::post('/band/login/bandd/linkinpark/concert/ticket/{cid}', 'TicketController@store')->name('ticket.store');
    Route::get('/band/login/bandd/linkinpark/concert/ticket/print/{mob}', 'TicketController@print')->name('ticket.print');
    Route::get('/band/login/bandd/concert','bandController@lpconcert')->name('band.lpconcert');
    Route::get('/band/login/bandd/concert/purchase','bandController@purchase')->name('band.purchase');

    Route::get('/band/login/bandd/concert/{bandName}','ConcertController@create')->name('concert.create');
    Route::post('/band/login/bandd/concert/{bandName}','ConcertController@insert')->name('concert.insert');

    Route::get('/band/login/bandd/concert/edit/{concertNo}','ConcertController@edit')->name('concert.edit');
    Route::post('/band/login/bandd/concert/edit/{concertNo}','ConcertController@update')->name('concert.update');

    Route::get('/band/login/bandd/concert/delete/{concertNo}','ConcertController@delete')->name('concert.delete');
    Route::post('/band/login/bandd/concert/delete/{concertNo}','ConcertController@destroy')->name('concert.destroy');
    Route::get('/band/login/home','HomeController@index')->name('home.index');

    Route::get('/band/login/bandd','bandController@index')->name('band.index');

    Route::get('/band/login/bandd/add','bandController@create')->name('band.create');
    Route::post('/band/login/bandd/add','bandController@insert')->name('band.insert');

    Route::get('/band/login/bandd/edit/{bid}','bandController@edit')->name('band.edit');
    Route::post('/band/login/bandd/edit/{bid}','bandController@update')->name('band.update');

    Route::get('/band/login/bandd/delete/{bid}','bandController@delete')->name('band.delete');
    Route::post('/band/login/bandd/delete/{bid}','bandController@destroy')->name('band.destroy');
    //############################ Concert ##########################################################################################
    Route::get('/band/login/bandd/concert','bandController@lpconcert')->name('band.lpconcert');

    Route::get('/band/login/bandd/concert/{bandName}','ConcertController@create')->name('concert.create');
    Route::post('/band/login/bandd/concert/{bandName}','ConcertController@insert')->name('concert.insert');

    Route::get('/band/login/bandd/concert/edit/{concertNo}','ConcertController@edit')->name('concert.edit');
    Route::post('/band/login/bandd/concert/edit/{concertNo}','ConcertController@update')->name('concert.update');

    Route::get('/band/login/bandd/concert/delete/{concertNo}','ConcertController@delete')->name('concert.delete');
    Route::post('/band/login/bandd/concert/delete/{concertNo}','ConcertController@destroy')->name('concert.destroy');

//############################ Report ##########################################################################################
    /*Ticket purchase End */


    Route::group(['middleware' => ['admin']],function (){
        Route::get('/admin/dashboard','AdminController@index')->name('admin.index');
        Route::get('/admin/user','AdminController@showuser')->name('admin.showuser');
        Route::get('/admin/manageuser','AdminController@manageuser')->name('admin.manageuser');
        Route::get('/admin/deleteuser/{id}','AdminController@deleteuser')->name('admin.delete');
        Route::get('/admin/confirm/{id}','AdminController@confirmdelete')->name('admin.confirm');
    });


});

