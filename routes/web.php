<?php

use Illuminate\Support\Facades\Route;

//There's need of importing the location of the controller!

//Home Controller
use App\Http\Controllers\HomeController;

//About Controller
use App\Http\Controllers\AboutController;

//Contact Controller
use App\Http\Controllers\ContactController;

//Information Controller
use App\Http\Controllers\InformationController;

//Services Controller
use App\Http\Controllers\ServicesController;

//Category Controller
use App\Http\Controllers\CategoryController;

//History Controller
use App\Http\Controllers\HistoryController;

//Catalogue Controller
use App\Http\Controllers\CatalogueController;

//Site Controller
use App\Http\Controllers\SiteController;

//Place Controller
use App\Http\Controllers\PlaceController;

//Home File Location
//Index is the function to be used in the controller file.
Route::get('/', [HomeController::class, 'index']);

//About File Location
//About is the function to be used in the controller file
Route::get('/about', [AboutController::class, 'about']);

//Contact File Location
//Contact is the function to be used in the controller file
Route::get('/contact', [ContactController::class, 'contact']);


//Information File Location
//Information is the fucntion to be used in the controller file
Route::get('/information', [InformationController::class, 'information']);

//Services File Location
//Services is the function to tbe used in the controller file
Route::get('/services', [ServicesController::class, 'services']);

//Category File Location
//Category is the function to be used in the controller file
Route::get('/category', [CategoryController::class, 'category']);

//History File Location
//History is the function to be used in the controller file
Route::get('/history', [HistoryController::class, 'history']);

//Cataloue File Location
//Catalogue is the function to be used in the controller file
Route::get('/catalogue', [CatalogueController::class, 'catalogue']);

//Books route
Route::get('/sites/create', [SiteController::class, 'create'])->name('sites.create');
Route::post('/sites', [SiteController::class, 'store'])->name('sites.store');

//Places File Location
//Places is the function to be used in the file controller file
Route::get('/places', [PlaceController::class, 'create'])->name('places.create');
Route::post('/places', [PlaceController::class, 'store']);
