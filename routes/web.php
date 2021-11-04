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
        //Admin
Route::resource('admin_user', 'Admin\Admin_UserController');

        //Admin->Volunteer ---------------------------------------

//  Route::get('/admin_volunteer', 'Admin\Admin_VolunteerController@index');
//  Route::post('/admin_volunteer/{id}/edit', 'Admin\Admin_VolunteerController@edit');
//  Route::get('/admin_volunteer/{id}', 'Admin\Admin_VolunteerController@show');


Route::resource('admin_volunteer', 'Admin\Admin_VolunteerController');

        //Admin->Medic -------------------------------------------
Route::get('/admin_medic_index', 'Admin\Admin_MedicController@index');
// Route::resource('admin_medic', 'Admin\Admin_MedicController');

Route::get('/admin_index', 'Admin\AdminIndexController@index');



//Route Volunteer --------------------------------------------------------------------

// Route::get('/volunteer_question', function () {
//     return view('volunteer.volunteer_question');
// });

// Route::get('volunteer_question', 'Volunteer\VolunteerController@volunteer_questionnaire');

Route::resource('volunteer_con', 'Volunteer\volunteer_conController');

Route::resource('volunteer_per', 'Volunteer\volunteer_perController');

Route::get('volunteer_question','Volunteer\volunteer_questionController@volunteer_question');

Route::get('Q1','QuestiononeController@create');
Route::post('Q1','QuestiononeController@store');

Route::get('Q1-2','Questionone_twoController@create');
Route::post('Q1-2','Questionone_twoController@store');

Route::get('Q1-3','Questionone_treeController@create');
Route::post('Q1-3','Questionone_treeController@store');

Route::get('Q1-4','Questionone_fourController@create');
Route::post('Q1-4','Questionone_fourController@store');



Route::get('Q2','QuestiontwoController@create');
Route::post('Q2','QuestiontwoController@store');

Route::get('Q2-2','Questiontwo_twoController@create');
Route::post('Q2-2','Questiontwo_twoController@store');

Route::get('Q2-3','Questiontwo_treeController@create');
Route::post('Q2-3','Questiontwo_treeController@store');

Route::get('Q2-4','Questiontwo_fourController@create');
Route::post('Q2-4','Questiontwo_fourController@store');

Route::get('Q3','QuestiontreeController@create');
Route::post('Q3','QuestiontreeController@store');

Route::get('Q3-2','Questiontree_twoController@create');
Route::post('Q3-2','Questiontree_twoController@store');

//Route Medic -------------------------------------------------------------------------


Route::get('/medic_index', function () {
    return view('medic.medic_index');
});


// Q1 -> Medic  --------------
 Route::get('/medic_quest1_select', function () {
     return view('medic.medic_volunteer.quest1.medic_quest1_select');
 });
 Route::get('/medic_quest1_5', function () {
    return view('medic.medic_volunteer.quest1.medic_quest1_5');
});
 Route::get('/medic_quest1_13', function () {
    return view('medic.medic_volunteer.quest1.medic_quest1_13');
});
 Route::get('/medic_quest1_26', function () {
    return view('medic.medic_volunteer.quest1.medic_quest1_26');
});
// Q2 -> Medic  --------------
Route::get('/medic_quest3', function () {
    return view('medic.medic_volunteer.quest2.medic_quest3');
});
Route::get('/medic_quest5', function () {
   return view('medic.medic_volunteer.quest2.medic_quest5');
});
Route::get('/medic_quest13', function () {
   return view('medic.medic_volunteer.quest2.medic_quest13');
});
Route::get('/medic_quest26', function () {
   return view('medic.medic_volunteer.quest2.medic_quest26');
});

// ---------------------------
Route::get('/medic_index', function () {
    return view('medic.medic_index');
});


// Q1 -> Medic  --------------
 Route::get('/medic_quest1_select', function () {
     return view('medic.medic_volunteer.quest1.medic_quest1_select');
 });
 Route::get('/medic_quest1_5', function () {
    return view('medic.medic_volunteer.quest1.medic_quest1_5');
});
 Route::get('/medic_quest1_13', function () {
    return view('medic.medic_volunteer.quest1.medic_quest1_13');
});
 Route::get('/medic_quest1_26', function () {
    return view('medic.medic_volunteer.quest1.medic_quest1_26');
});
// Q2 -> Medic  --------------
Route::get('/medic_quest3', function () {
    return view('medic.medic_volunteer.quest2.medic_quest3');
});
Route::get('/medic_quest5', function () {
   return view('medic.medic_volunteer.quest2.medic_quest5');
});
Route::get('/medic_quest13', function () {
   return view('medic.medic_volunteer.quest2.medic_quest13');
});
Route::get('/medic_quest26', function () {
   return view('medic.medic_volunteer.quest2.medic_quest26');
});

// ---------------------------

Route::resource('medic_personal', 'Medic\Medic_PersonalController');

////////////////// predicate1
Route::get('predicate1/{id}','Medic\MedicVolunteerController@edit');
Route::post('quest1_medic','Medic\MedicVolunteerController@store_advice');
Route::post('quest1_medicine','Medic\MedicVolunteerController@store_medicine');
Route::post('predicate1/{id}','Medic\MedicVolunteerController@store_emotion');
Route::patch('predicate1/{id}','Medic\MedicVolunteerController@update');


// Route::post('predicate1/{id}','Medic\MedicineController@store_medicine');
Route::delete('predicate1/{id}','Medic\MedicineController@destroy');

// Route::post('predicate1/{id}','Medic\Medic_EmotionController@store_emotion');

/////////////////----

Route::get('predicate2/{id}','Medic\MedicVolunteerController@edit2');

Route::get('/medic_volunteer_sub/{id}','Medic\MedicController@volunteer_sub');
Route::get('/medic_volunteer', 'Medic\MedicController@index');
Route::get('/medic_volunteer/{id}', 'Medic\MedicController@show');

Route::resource('test', 'TestController');

// Medicine ---------------------------------------------------
Route::get('/medicine', 'Medic\MedicineController@index');
Route::get('/medicine/medicine_create', 'Medic\MedicineController@create');
Route::post('/medicine/', 'Medic\MedicineController@store');

Route::get('/medicine/{id}/medicine_edit', 'Medic\MedicineController@edit');
Route::patch('/medicine/{id}', 'Medic\MedicineController@update');
Route::delete('/medicine/{id}', 'Medic\MedicineController@destroy');

//Medic_Emotion -----------------------------------------------------

Route::get('/medic_emotion/', 'Medic\Medic_EmotionController@index');
Route::post('/medic_emotion/', 'Medic\Medic_EmotionController@store');