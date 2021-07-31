<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Admin\AdminIndexController;
use App\Http\Controller\Medic\MedicIndexController;
use App\Http\Controller\Volunteer\VolunteerIndexController;
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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//Route Admin
Route::get('/admin_index', function () {
        return view('admin.admin_index'); 
    });

//Route Volunteer
Route::get('/volunteer_index', function () {
    return view('volunteer.volunteer_index');
});
//Route Medic
Route::get('/medic_index', function () {
    return view('medic.medic_index');
});

Route::resource('crud', 'CrudController');