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

Route::prefix('admin')->group(function () {

//Achievements CRUD System
Route::get('/achievements' , 'AchievementController@index')->name('achievements.index');
Route::get('/achievements/create' , 'AchievementController@create')->name('achievements.create');
Route::post('/achievements/store' , 'AchievementController@store')->name('achievements.store');
Route::get('/achievements/edit/{id}' , 'AchievementController@edit')->name('achievements.edit');
Route::put('/achievements/update/{id}' , 'AchievementController@update')->name('achievements.update');
Route::delete('/achievements/delete/{id}' , 'AchievementController@destroy')->name('achievements.destroy');

//Ads CRUD System
Route::get('/ads' , 'AdsController@index')->name('ads.index');
Route::get('/ads/create' , 'AdsController@create')->name('ads.create');
Route::post('/ads/store' , 'AdsController@store')->name('ads.store');
Route::get('/ads/edit/{id}' , 'AdsController@edit')->name('ads.edit');
Route::put('/ads/update/{id}' , 'AdsController@update')->name('ads.update');
Route::delete('/ads/delete/{id}' , 'AdsController@destroy')->name('ads.destroy');

//Business_Area CRUD System
Route::get('/business_area' , 'BusinessAreaController@index')->name('business_area.index');
Route::get('/business_area/create' , 'BusinessAreaController@create')->name('business_area.create');
Route::post('/business_area/store' , 'BusinessAreaController@store')->name('business_area.store');
Route::get('/business_area/edit/{id}' , 'BusinessAreaController@edit')->name('business_area.edit');
Route::put('/business_area/update/{id}' , 'BusinessAreaController@update')->name('business_area.update');
Route::delete('/business_area/delete/{id}' , 'BusinessAreaController@destroy')->name('business_area.destroy');

//Contacts CRUD System
Route::get('/contacts' , 'ContactController@index')->name('contacts.index');
Route::get('/contacts/create' , 'ContactController@create')->name('contacts.create');
Route::post('/contacts/store' , 'ContactController@store')->name('contacts.store');
Route::get('/contacts/edit/{id}' , 'ContactController@edit')->name('contacts.edit');
Route::put('/contacts/update/{id}' , 'ContactController@update')->name('contacts.update');
Route::delete('/contacts/delete/{id}' , 'ContactController@destroy')->name('contacts.destroy');

//courses CRUD System
    Route::get('/courses', 'CourseController@index')->name('courses.index');
    Route::get('/courses/create', 'CourseController@create')->name('courses.create');
    Route::post('/courses/store', 'CourseController@store')->name('courses.store');
    Route::get('/courses/edit/{id}', 'CourseController@edit')->name('courses.edit');
    Route::put('/courses/update/{id}', 'CourseController@update')->name('courses.update');
    Route::delete('/courses/delete/{id}', 'CourseController@destroy')->name('courses.destroy');

//services CRUD System
    Route::get('/services', 'ServiceController@index')->name('services.index');
    Route::get('/services/create', 'ServiceController@create')->name('services.create');
    Route::post('/services/store', 'ServiceController@store')->name('services.store');
    Route::get('/services/edit/{id}', 'ServiceController@edit')->name('services.edit');
    Route::put('/services/update/{id}', 'ServiceController@update')->name('services.update');
    Route::delete('/services/delete/{id}', 'ServiceController@destroy')->name('services.destroy');

//HeadQuartersCourse CRUD System
Route::get('/headquarterCourse' , 'HeadQuartersCourseController@index')->name('headquarterCourse.index');
Route::get('/headquarterCourse/create' , 'HeadQuartersCourseController@create')->name('headquarterCourse.create');
Route::post('/headquarterCourse/store' , 'HeadQuartersCourseController@store')->name('headquarterCourse.store');
Route::get('/headquarterCourse/edit/{id}' , 'HeadQuartersCourseController@edit')->name('headquarterCourse.edit');
Route::put('/headquarterCourse/update/{id}' , 'HeadQuartersCourseController@update')->name('headquarterCourse.update');
Route::delete('/headquarterCourse/delete/{id}' , 'HeadQuartersCourseController@destroy')->name('headquarterCourse.destroy');

//OnlineCourse CRUD System
Route::get('/onlineCourse' , 'OnlineCoursesController@index')->name('onlineCourse.index');
Route::get('/onlineCourse/create' , 'OnlineCoursesController@create')->name('onlineCourse.create');
Route::post('/onlineCourse/store' , 'OnlineCoursesController@store')->name('onlineCourse.store');
Route::get('/onlineCourse/edit/{id}' , 'OnlineCoursesController@edit')->name('onlineCourse.edit');
Route::put('/onlineCourse/update/{id}' , 'OnlineCoursesController@update')->name('onlineCourse.update');
Route::delete('/onlineCourse/delete/{id}' , 'OnlineCoursesController@destroy')->name('onlineCourse.destroy');

});

// Courses Routes - (USER ROUTES)
Route::group(['namespace' => 'user'] , function (){
    Route::get('courses' , 'CourseController@courses');
    Route::get('course-details/{course_id}' , 'CourseController@courseDetails');
    Route::get('/', 'HomeController@index');
    Route::get('business-areas' , 'BusinessAreaController@index');
    Route::get('achievements' , 'AchievementController@index');
    Route::get('contact' , 'ContactController@contact');
    Route::post('contact' , 'ContactController@storeContact')->name('userContact');
    Route::get('services' , 'ServiceController@services');
    Route::get('services-details/{service_id}' , 'ServiceController@getServiceById');
});
// });
