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


Auth::routes();


Route::get('/logout' , function(){
    Auth::guard('web')->logout();
    return redirect('/login');
})->name('user.logout');

Route::group(['prefix'=>'admin' , 'namespace' => 'admin'] ,function () {

//Achievements CRUD System
Route::get('/achievements' , 'AchievementController@index')->name('achievements.index');
Route::get('/achievements/create' , 'AchievementController@create')->name('achievements.create');
Route::get('/achievements/edit/{id}' , 'AchievementController@edit')->name('achievements.edit');
Route::get('/achievements/delete/{id}' , 'AchievementController@destroy')->name('achievements.destroy');

Route::group(['middleware' => 'optimizeImages'] ,function (){
    Route::post('/achievements/store' , 'AchievementController@store')->name('achievements.store');
    Route::put('/achievements/update/{id}' , 'AchievementController@update')->name('achievements.update');
});

//Ads CRUD System
Route::get('/ads' , 'AdsController@index')->name('ads.index');
Route::get('/ads/create' , 'AdsController@create')->name('ads.create');
Route::get('/ads/edit/{id}' , 'AdsController@edit')->name('ads.edit');
Route::get('/ads/delete/{id}' , 'AdsController@destroy')->name('ads.destroy');

    Route::group(['middleware' => 'optimizeImages'] ,function () {
        Route::post('/ads/store' , 'AdsController@store')->name('ads.store');
        Route::put('/ads/update/{id}' , 'AdsController@update')->name('ads.update');


    });

//Business_Area CRUD System
Route::get('/business_area' , 'BusinessAreaController@index')->name('business_area.index');
Route::get('/business_area/create' , 'BusinessAreaController@create')->name('business_area.create');
Route::get('/business_area/edit/{id}' , 'BusinessAreaController@edit')->name('business_area.edit');
Route::get('/business_area/delete/{id}' , 'BusinessAreaController@destroy')->name('business_area.destroy');

    Route::group(['middleware' => 'optimizeImages'] ,function () {
        Route::post('/business_area/store' , 'BusinessAreaController@store')->name('business_area.store');
        Route::put('/business_area/update/{id}' , 'BusinessAreaController@update')->name('business_area.update');

    });

//Contacts CRUD System
Route::get('/contacts' , 'ContactController@index')->name('contacts.index');
Route::get('/contacts/create' , 'ContactController@create')->name('contacts.create');
Route::post('/contacts/store' , 'ContactController@store')->name('contacts.store');
Route::get('/contacts/edit/{id}' , 'ContactController@edit')->name('contacts.edit');
Route::put('/contacts/update/{id}' , 'ContactController@update')->name('contacts.update');
Route::get('/contacts/delete/{id}' , 'ContactController@destroy')->name('contacts.destroy');

//courses CRUD System

    Route::get('/courses', 'CourseController@index')->name('courses.index');
    Route::get('/courses/create', 'CourseController@create')->name('courses.create');
    Route::post('/courses/store', 'CourseController@store')->name('courses.store');
    Route::get('/courses/edit/{id}', 'CourseController@edit')->name('courses.edit');
    Route::put('/courses/update/{id}', 'CourseController@update')->name('courses.update');
    Route::get('/courses/delete/{id}', 'CourseController@destroy')->name('courses.destroy');

//services CRUD System
    Route::get('/services', 'ServiceController@index')->name('services.index');
    Route::get('/services/create', 'ServiceController@create')->name('services.create');
    Route::get('/services/edit/{id}', 'ServiceController@edit')->name('services.edit');
    Route::get('/services/delete/{id}', 'ServiceController@destroy')->name('services.destroy');

    Route::group(['middleware' => 'optimizeImages'] ,function () {
        Route::post('/services/store', 'ServiceController@store')->name('services.store');
        Route::put('/services/update/{id}', 'ServiceController@update')->name('services.update');


    });

    Route::get('/specialists', 'SpecialistController@index');
    Route::get('/specialist/create', 'SpecialistController@create');
    Route::get('/specialist/edit/{id}', 'SpecialistController@edit');
    Route::get('/specialist/delete/{id}', 'SpecialistController@destroy');

    Route::group(['middleware' => 'optimizeImages'] ,function () {
        Route::post('/specialist/store', 'SpecialistController@store');
        Route::put('/specialist/update/{id}', 'SpecialistController@update');


    });

//HeadQuartersCourse CRUD System
Route::get('/headquarterCourse' , 'HeadQuartersCourseController@index')->name('headquarterCourse.index');
Route::get('/headquarterCourse/create' , 'HeadQuartersCourseController@create')->name('headquarterCourse.create');
Route::post('/headquarterCourse/store' , 'HeadQuartersCourseController@store')->name('headquarterCourse.store');
Route::get('/headquarterCourse/edit/{id}' , 'HeadQuartersCourseController@edit')->name('headquarterCourse.edit');
Route::put('/headquarterCourse/update/{id}' , 'HeadQuartersCourseController@update')->name('headquarterCourse.update');
Route::get('/headquarterCourse/delete/{id}' , 'HeadQuartersCourseController@destroy')->name('headquarterCourse.destroy');

//OnlineCourse CRUD System
Route::get('/onlineCourse' , 'OnlineCoursesController@index')->name('onlineCourse.index');
Route::get('/onlineCourse/create' , 'OnlineCoursesController@create')->name('onlineCourse.create');
Route::post('/onlineCourse/store' , 'OnlineCoursesController@store')->name('onlineCourse.store');
Route::get('/onlineCourse/edit/{id}' , 'OnlineCoursesController@edit')->name('onlineCourse.edit');
Route::put('/onlineCourse/update/{id}' , 'OnlineCoursesController@update')->name('onlineCourse.update');
Route::get('/onlineCourse/delete/{id}' , 'OnlineCoursesController@destroy')->name('onlineCourse.destroy');

    Route::get('/partners' , 'PartnerController@index');
    Route::get('/partners/create' , 'PartnerController@create');
    Route::post('/partners/store' , 'PartnerController@store');
    Route::get('/partners/edit/{id}' , 'PartnerController@edit');
    Route::put('/partners/update/{id}' , 'PartnerController@update');
    Route::get('/partners/delete/{id}' , 'PartnerController@destroy');

});

// Courses Routes - (USER ROUTES)
Route::group(['namespace' => 'user'] , function (){
    Route::get('courses' , 'CourseController@courses');
    Route::get('course-details/{course_id}' , 'CourseController@courseDetails');
    Route::get('/getDataCourse' , 'CourseController@getDataOfCourse');
    Route::get('/', 'HomeController@index');
    Route::get('business-areas' , 'BusinessAreaController@index');
    Route::get('achievements' , 'AchievementController@index');
    Route::get('contact' , 'ContactController@contact');
    Route::post('contact' , 'ContactController@storeContact')->name('userContact');
    Route::get('services' , 'ServiceController@services');
    Route::get('service/details/{service_id}' , 'ServiceController@getServiceById');
    Route::get('subscribe' , 'SubscriptionController@subscribe');
});
