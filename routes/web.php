<?php

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

// Route::get('/subjecttest', function () {
//     return view('frontend.subject');
// });
Route::group(['middleware' => ['role:admin']],function(){
Route::resource('category','CategoryController');
Route::resource('subject','SubjectController');
Route::resource('question','QuestionController');
});

Route::get('/', 'FrontendController@index');

Route::group(['middleware' => ['role:user']], function (){


Route::get('subjectListMCQ','FrontendController@subjectTestMCQ')->name('subjectListMCQ');
Route::get('subjectListTF','FrontendController@subjectTestTF')->name('subjectListTF');
Route::get('questionListMCQ/{id}','FrontendController@questionTestMCQ')->name('questionListMCQ');
Route::get('questionListTF/{id}','FrontendController@questionTestTF')->name('questionListTF');
Route::post('storeanswer','FrontendController@storedata')->name('storeanswer');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
