<?php

use Illuminate\Support\Facades\Route;
//Admin ------------------------------------------------------------
use App\Http\Controller\Admin\AdminIndexController;
use App\Http\Controller\Admin\Admin_Volunteer_IndexController;
use App\Http\Controller\Admin\Admin_Medic_IndexController;

use App\Http\Controller\Medic\MedicIndexController;
use App\Http\Controller\Volunteer\VolunteerIndexController;

Route::get('/', function () {
    return view('welcome');
}); 
//auth
Auth::routes();
//crud
Route::resource('crud', 'CrudController');

Route::get('/home', 'HomeController@index')->name('home');

//Route Admin ------------------------------------------------------------------------

Route::get('/admin_index', function () {
        return view('admin.admin_index'); 
    });
Route::get('/admin_volunteer_index', function() {
    return view('admin.admin_volunteer.admin_volunteer_index');
    });
Route::get('/admin_medic_index', function() {
        return view('admin.admin_medic.admin_medic_index');
    });

//Route Volunteer --------------------------------------------------------------------

Route::get('/volunteer_index', function () {
    return view('volunteer.volunteer_index');
});



//Route Medic -------------------------------------------------------------------------

Route::get('/medic_index', function () {
    return view('medic.medic_index');
});




