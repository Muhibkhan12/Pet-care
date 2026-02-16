<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\petController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userQueryController;
use App\Http\Controllers\VetController;
use App\Http\Middleware\ValidUser;
use Illuminate\Bus\UpdatedBatchJobCounts;
use Illuminate\Support\Facades\Route;

//UI pages
Route::get('/', [UserController::class, 'showHome'])->middleware('validUser')->name('frontend-home');
Route::get('/about', [VetController::class, 'showAbout'])->name('frontend-about');
Route::get('/services', [UserController::class, 'showServices'])->name('frontend-services');

Route::get('/contact', [UserController::class, 'showContact'])->name('frontend-contact');
Route::post('/contact',[userQueryController::class,'userQuery'])->name('user-query');


//Authentication
Route::get('/register', [UserController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('user-register');

Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'loginAttempt'])->name('user-login');

Route::get('/logout', [UserController::class, 'logout'])->name('user-logout');

//products

Route::get('/products', [ProductsController::class, 'showProduct'])->name('frontend-products');
Route::get('/add-products',[ProductsController::class,'addProductsPage'])->name('add-products');
Route::post('/add-products',[ProductsController::class,'addproducts'])->name('insert-products');

Route::delete('/dalete-product/{id}',[ProductsController::class,'deleteProduct'])->name('delete-product');

Route::get('/edit-products/{id}',[ProductsController::class,'showEditProductPage'])->name('edit-products-page');
Route::patch('/update-product/{id}',[ProductsController::class,'updateProduct'])->name('update-products');


//Admin Dashboard
Route::get('/admin-dashboard', [AdminController::class, 'showDashboard'])
->name('admin-dashboard');
Route::get('/manage-user',[AdminController::class,'showManageUser'])->name('manage-user');
Route::get('/edit-user/{id}',[UserController::class,'showEditUser'])->name('edit-user');
Route::put('/edit-user-data/{id}',[UserController::class,'updateUserDetails'])->name('edit-user-data');
Route::delete('/user/{id}',[UserController::class,'deleteUser'])->name('delete-user');

Route::get('/roles-permission',[AdminController::class,'showUserOnVet'])->name('rolesnpermission');
Route::post('/roles-permission/{id}',[AdminController::class,'updateToVet'])->name('makeVet');

Route::get('/manage-product',[AdminController::class,'showManageProducts'])->name('manage-products');
Route::get('/manage-Appoinment',[AppointmentController::class,'approveAppointments'])->name('approve-appointment');
Route::get('/delete-Appoinment/{id}',[AppointmentController::class,'deleteAppointments'])->name('delete-appointment');

//USER DASHBOARD
Route::get('user-dashboard',[PetController::class,'showUserPets'])->name('user-dashboard');
Route::get('/add-pet',[PetController::class,'showAddPet'])->name('add-pet');
Route::post('/add-pet',[PetController::class,'storePetData'])->name('add-pet-data');
//user-appoinments
Route::get('/add-appoinment',[AppointmentController::class,'ShowAppoinmentPage'])->name('book-appoinment');
Route::post('/create-appointment',[AppointmentController::class,'createAppointment'])->name('create-appointment');
Route::get('/UpdatedStatus/{id}',[AppointmentController::class,'updateStatus'])->name('update-status');
Route::get('/deleteAppointment/{id}',[AppointmentController::class,'deleteStatus'])->name('delete-status');

//Vetdashboard
Route::get('vet-dashboard',[VetController::class,'showVet'])->name('show-veterian');
Route::get('/vet-information',[VetController::class,'showVetInfoPage'])->name('vet-info-form');
Route::post('/store-vet-info',[VetController::class,'storeVetdata'])->name('add-vet-data');
Route::get('/vet-appoinment',[VetController::class,'showVetAppoinmetPage'])->name('show-vet-appointment');