<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;

Route::get('/', function () {
    return view('welcome');
});


// companies
Route::get('/companies', [CompanyController::class,'index'])->name('companies.index');

Route::get('/companies/create',[CompanyController::class,'create'])->name('companies.create');
Route::post('/companies/store',[CompanyController::class,'store'])->name('companies.store');

Route::get('/companies/show/{id}', [CompanyController::class,'show'])->name('companies.show');

Route::get('/companies/destroy/{id}', [CompanyController::class,'destroy'])->name('companies.destroy');

Route::get('/companies/edit/{id}', [CompanyController::class,'edit'])->name('companies.edit');
Route::put('/companies/update/{id}', [CompanyController::class,'update'])->name('companies.update');

//Contacts_______________________________________________________________________________________________

Route::get('/contacts/index', [ContactController::class,'index'])->name('contacts.index');

Route::get('/contacts/create', [ContactController::class,'create'])->name('contacts.create');
Route::post('/contacts/store',[ContactController::class,'store'])->name('contacts.store');

Route::get('/contacts/show/{id}', [ContactController::class,'show'])->name('contacts.show');

Route::get('/contacts/destroy/{id}', [ContactController::class,'destroy'])->name('contacts.destroy');

Route::get('/contacts/edit/{id}', [ContactController::class,'edit'])->name('contacts.edit');
Route::put('/contacts/update/{id}', [ContactController::class,'update'])->name('contacts.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Countries_________________________________________________________________________________________________

Route::get('/countries',[CountryController::class,'index'])->name('countries.index');

Route::get('/countries/create',[CountryController::class,'create'])->name('countries.create');
Route::post('/countries/store',[CountryController::class,'store'])->name('countries.store');

Route::get('/countries/destroy/{id}', [CountryController::class,'destroy'])->name('countries.destroy');

Route::get('/countries/show/{id}', [CountryController::class,'show'])->name('countries.show');

Route::get('/countries/edit/{id}', [CountryController::class,'edit'])->name('countries.edit');
Route::put('/countries/update/{id}', [CountryController::class,'update'])->name('countries.update');


