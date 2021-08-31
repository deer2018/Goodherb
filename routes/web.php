<?php

use Illuminate\Support\Facades\Route;
//Admin ------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
}); 
//auth

Auth::routes();

//crud

Route::resource('crud', 'CrudController');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/404', function () {
    return view('404'); 
}); 

Route::get('/login2', function () {
    return view('auth.login2'); 
}); 
//Route Admin ------------------------------------------------------------------------

Route::resource('admin_user', 'admin\Admin_UserController');

Route::get('/admin_index', 'Admin\AdminIndexController@index');
Route::get('/admin_volunteer_index', 'Admin\Admin_VolunteerController@index');
Route::get('/admin_medic_index', 'Admin\Admin_MedicController@index');

//Route Volunteer --------------------------------------------------------------------

Route::get('/volunteer_questionnaire', function () {
    return view('volunteer.volunteer_questionnaire.volunteer_questionnaire');
});
// Route::get('/volunteer_questionnaire_sub1', function () {
//     return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub1');
// });
// Route::get('/volunteer_questionnaire_sub1_2', function () {
//     return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub1_2');
// });
// Route::get('/volunteer_questionnaire_sub2', function () {
//     return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub2');
// });
// Route::get('/volunteer_questionnaire_sub2_2', function () {
//     return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub2_2');
// });
// Route::get('/volunteer_questionnaire_sub3', function () {
//     return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub3');
// });
// Route::get('/volunteer_questionnaire_sub3_2', function () {
//     return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub3_2');
// });
// Route::get('/volunteer_questionnaire_sub4', function () {
//     return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub4');
// });
// Route::get('/volunteer_questionnaire_sub4_2', function () {
//     return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_sub4_2');
// });
Route::get('/volunteer_questionnaire_confirm', function () {
    return view('volunteer.volunteer_questionnaire.volunteer_questionnaire_confirm');
});
Route::get('/volunteer_conclusion', function () {
    return view('volunteer.volunteer_conclusion.volunteer_conclusion');
});

Route::resource('volunteer_per', 'Volunteer\volunteer_perController');

Route::get('Q1','QuestiononeController@create');
Route::post('Q1','QuestiononeController@store');
Route::get('Q1-2','QuestiononeController@edit');
Route::get('Q1-3','QuestiononeController@editeIII');
Route::get('Q1-4','QuestiononeController@editteIV');

Route::get('Q2','QuestiontwoController@create');
Route::get('Q2-2','QuestiontwoController@edit');
Route::get('Q2-3','QuestiontwoController@editeIII');
Route::get('Q2-4','QuestiontwoController@editteIV');

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


Route::resource('test', 'TestController');