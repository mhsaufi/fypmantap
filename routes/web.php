<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('setlist', 'SetlistController@show');
Route::post('setlist/song','SetlistController@addSong');
Route::post('setlist/createsetlist','SetlistController@addSetlist');

Route::get('viewsong','SetSongsController@show');

Route::get('agreement', 'AgreeController@show');

Route::get('invoices', 'InvoiceController@show');

Route::get('booking', 'EventController@showbooking');

Route::get('events', 'EventController@show');
Route::post('events/add', 'EventController@addEvent');
Route::get('events/delEvent', 'EventController@delEvent');
Route::post('events/edit', 'EventController@editEvent');




Route::get('/reporting', function () {
    return view('reporting');
});

Route::get('/ggwp', function () {
    return view('ggwp');
});

Route::post('/ggwp2','HomeController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('cal', 'gCalendarController');
Route::get('oauth','gCalendarController@oauth');


Route::post('/events', 'EventController@addEvent');


?>
