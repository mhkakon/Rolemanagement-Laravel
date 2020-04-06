<?php





Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/registerd','RoleController@registerdIndex')->middleware('registerd');
Route::get('/editor', 'RoleController@editorIndex')->middleware('editor');
Route::get('/subscriber', 'RoleController@subscriberIndex')->middleware('subscriber');

Route::get('/registerdredirect', 'RdController@registerd');
Route::get('/subscriberredirect', 'RdController@subscriber');
Route::get('/editorredirect', 'RdController@editor');


Route::resource('crud', 'CrudController');



Route::get('/', 'CrudController@index');

//Route::get('/', 'ReunionController@index');

//Route::get('/admin', 'AdminController@index')->middleware('admin');

Route::get('/admin', 'CrudController@adminReturn')->middleware('admin');

Route::patch('role/{id}', 'CrudController@updateRole')->middleware('admin');

Route::resource('reunion', 'ReunionController')->middleware('registerd');


Route::get('/test', 'ReunionController@test');

Route::get('/reunion/{reunion}/edit/{name}', 'ReunionController@edit');


