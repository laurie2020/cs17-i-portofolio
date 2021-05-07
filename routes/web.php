<?php

use App\Http\Controllers\FactController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Models\Fact;
use App\Models\Portofolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    
    $users = User::all();
    $facts = Fact::all();
    $portofolios = Portofolio::all();
    $services = Service::all();
    $skills = Skill::all();

    return view('welcome', compact('users', 'facts', 'portofolios', 'services', 'skills'));
})->name('welcome');

Route::get('/backoffice', function(){
    return view('welcome2');
})->name('backoffice');

// User
// All
Route::get('/users', [UserController::class, 'index'])->name('users');
// Delete
Route::post('/users/{id}/delete', [UserController::class, 'destroy']);
// Edit
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
// Update
Route::post('/users/{id}/update', [UserController::class, 'update']);
// Create
Route::get('/users/create', [UserController::class, 'create']);
// Store
Route::post('/users/store', [UserController::class, 'store']);


//Fact
// All
Route::get('/facts', [FactController::class, 'index'])->name('facts');
// Delete
Route::post('/facts/{id}/delete', [FactController::class, 'destroy']);
// Edit
Route::get('/facts/{id}/edit', [FactController::class, 'edit']);
// Update
Route::post('/facts/{id}/update', [FactController::class, 'update']);
// Create
Route::get('/facts/create', [FactController::class, 'create']);
// Store
Route::post('/facts/store', [FactController::class, 'store']);


//Portofolio
// All
Route::get('/portofolios', [PortofolioController::class, 'index'])->name('portofolios');
// Delete
Route::post('/portofolios/{id}/delete', [PortofolioController::class, 'destroy']);
// Edit
Route::get('/portofolios/{id}/edit', [PortofolioController::class, 'edit']);
// Update
Route::post('/portofolios/{id}/update', [PortofolioController::class, 'update']);
// Create
Route::get('/portofolios/create', [PortofolioController::class, 'create']);
// Store
Route::post('/portofolios/store', [PortofolioController::class, 'store']);


//Services
// All
Route::get('/services', [ServicesController::class, 'index'])->name('services');
// Delete
Route::post('/services/{id}/delete', [ServicesController::class, 'destroy']);
// Edit
Route::get('/services/{id}/edit', [ServicesController::class, 'edit']);
// Update
Route::post('/services/{id}/update', [ServicesController::class, 'update']);
// Create
Route::get('/services/create', [ServicesController::class, 'create']);
// Store
Route::post('/services/store', [ServicesController::class, 'store']);


//Skills
// All
Route::get('/skills', [SkillController::class, 'index'])->name('skills');
// Delete
Route::post('/skills/{id}/delete', [SkillController::class, 'destroy']);
// Edit
Route::get('/skills/{id}/edit', [SkillController::class, 'edit']);
// Update
Route::post('/skills/{id}/update', [SkillController::class, 'update']);
// Create
Route::get('/skills/create', [SkillController::class, 'create']);
// Store
Route::post('/skills/store', [SkillController::class, 'store']);
