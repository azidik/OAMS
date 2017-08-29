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
use App\Notification\Registration_Request;

Route::get('/', function () {
    /*return view('admin_account.auth.login');*/
    return view('admin_home');
});
Route::get('/pending', function () {
    return view('pending/pending_home');
});
Route::get('/registration_request', function() {
	$users = App\User_Account::first();
	$rr = App\Registration_Request();

	$users->notify(new Registration_Request($rr));
});

Route::resource('users', 'user_accountController');
Route::resource('impounds', 'animal_impoundingController');
Route::resource('foradopts', 'animal_for_adoptionController');
//Route::resource('categories', 'animal_categoryController');
Route::resource('lists', 'animal_listController');
Route::resource('cFoods', 'cat_foodController');
Route::resource('dFoods', 'dog_foodController');
Route::resource('registers', 'animal_registrationController');
Route::resource('donates', 'donorsController');
Route::resource('schedules', 'animal_scheduleController');
Route::resource('gets', 'get_serviceController');
Route::resource('reports', 'reportController');
Route::resource('adopts', 'animal_adoptionController');
Route::resource('regrequests', 'registration_requestController');
Route::resource('imprequests', 'impounding_requestController');
Route::resource('adoptrequests', 'adoption_requestController');

//Auth::routes();

Route::get('/admin_home', 'adminHomeController@index');
//Route::get('/login', 'HomeController@index');

Route::patch('/regrequest/{regrequests}', 'registration_requestController@approve');