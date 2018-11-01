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
    return view('welcome');
});
//Route: Students
Route::resource('students','StudentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route: Countries
Route::resource('countries','CountriesController');

//Route: Locations
Route::resource('locations','LocationsController');

//Route: Categories
Route::resource('categories','CategoriesController');


//Route:
Route::resource('specialisms','SpecialismsController');

//Route::resource('countries','Job_typesController');
//Route::resource('countries','CompaniesController');
//Route::resource('countries','CandidatesController');
//Route::resource('countries','PackagesController');