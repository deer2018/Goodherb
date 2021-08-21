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
Route::get('/volunteer_personal', function () {
    return view('volunteer.volunteer_personal.volunteer_personal');
});
Route::get('/volunteer_questionnaire', function () {
    return view('volunteer.volunteer_questionnaire.volunteer_questionnaire');
});
Route::get('/volunteer_questionnaire_sub1', function () {
    return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub1');
});
Route::get('/volunteer_questionnaire_sub1_2', function () {
    return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub1_2');
});
Route::get('/volunteer_questionnaire_sub2', function () {
    return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub2');
});
Route::get('/volunteer_questionnaire_sub2_2', function () {
    return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub2_2');
});
Route::get('/volunteer_questionnaire_sub3', function () {
    return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub3');
});
Route::get('/volunteer_questionnaire_sub3_2', function () {
    return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub3_2');
});
Route::get('/volunteer_questionnaire_sub4', function () {
    return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub4');
});
Route::get('/volunteer_questionnaire_sub4_2', function () {
    return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub4_2');
});
Route::get('/volunteer_questionnaire_confirm', function () {
    return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_confirm');
});
Route::get('/volunteer_conclusion', function () {
    return view('volunteer.volunteer_conclusion.volunteer_conclusion');
});



//Route Medic -------------------------------------------------------------------------


Route::get('/medic_index', function () {
    return view('medic.medic_index');
});

Route::get('/medic_personal', function () {
    return view('medic.medic_personal.medic_personal');
});

Route::get('/medic_edit', function () {
    return view('medic.medic_personal.medic_edit');
});

Route::get('/medic_volunteer', function () {
    return view('medic.medic_volunteer.medic_volunteer');
});
Route::get('/medic_volunteer_sub', function () {
    return view('medic.medic_volunteer.medic_volunteer_sub');
});

