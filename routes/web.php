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

Route::get('/', function () {
	
    return view('welcome');
});


Route::get('admin-login', [App\Http\Controllers\AdminController::class, 'index'])->name('admin-login');
Route::get('generate-pdf/{id}', [App\Http\Controllers\AdminController::class, 'generatePDF'])->name('generate-pdf');
Route::post('admin-login-post', [App\Http\Controllers\AdminController::class, 'login_post'])->name('admin-login-post');

Route::get('employ-login', [App\Http\Controllers\EmployController::class, 'index'])->name('employ-login');
Route::post('employ-login-post', [App\Http\Controllers\EmployController::class, 'login_post'])->name('employ-login-post');

Route::get('school-login', [App\Http\Controllers\SchoolController::class, 'index'])->name('school-login');
Route::post('school-login-post', [App\Http\Controllers\SchoolController::class, 'login_post'])->name('school-login-post');


/*-------------- SCHOOL DASHBOARD -----------------*/
Route::group(['middleware'=>['schoolCheck']],function(){
Route::get('school-dashboard', [App\Http\Controllers\SchoolController::class, 'schools_dashboard'])->name('school-dashboard');
Route::get('school-student-list/{id}', [App\Http\Controllers\SchoolController::class, 'school_student_list'])->name('school-student-list');
Route::get('add-school-student', [App\Http\Controllers\SchoolController::class, 'add_school_student'])->name('add-school-student');
Route::get('edit-school-student', [App\Http\Controllers\SchoolController::class, 'edit_school_student'])->name('edit-school-student');
Route::get('view-school-student-details/{id}', [App\Http\Controllers\SchoolController::class, 'view_school_student_details'])->name('view-school-student-details');
});
/*-------------- SCHOOL DASHBOARD -----------------*/




/*-------------- EMPLOY DASHBOARD -----------------*/
Route::group(['middleware'=>['employCheck']],function(){
Route::get('employ-dashboard', [App\Http\Controllers\EmployController::class, 'employ_dashboard'])->name('employ-dashboard');
Route::post('search-student-details', [App\Http\Controllers\EmployController::class, 'search_student_details'])->name('search-student-details');
Route::get('employ-edit-student/{id}', [App\Http\Controllers\EmployController::class, 'employ_edit_student'])->name('employ-edit-student');
Route::post('employ-update-student-details', [App\Http\Controllers\EmployController::class, 'employ_update_student_details'])->name('employ-update-student-details');

Route::post('employ-student-profile', [App\Http\Controllers\EmployController::class, 'employ_student_profile'])->name('employ-student-profile');
});
/*-------------- EMPLOY DASHBOARD -----------------*/



/*-------------- ADMIN DASHBOARD -----------------*/
Route::group(['middleware'=>['adminBasicAuth']],function(){

Route::get('admin-dashboard', [App\Http\Controllers\AdminController::class, 'admin_dashboard'])->name('admin-dashboard');

/*----------School Management---------------*/
Route::get('school', [App\Http\Controllers\AdminController::class, 'school'])->name('school');
Route::post('post-add-school', [App\Http\Controllers\AdminController::class, 'post_add_school'])->name('post-add-school');
Route::post('compare-username', [App\Http\Controllers\AdminController::class, 'compare_username'])->name('compare-username');
Route::post('generate-password', [App\Http\Controllers\AdminController::class, 'generate_password'])->name('generate-password');
Route::post('change-status', [App\Http\Controllers\AdminController::class, 'change_status'])->name('change-status');
Route::post('post-update-school', [App\Http\Controllers\AdminController::class, 'post_update_school'])->name('post-update-school');
Route::get('school-delete/{id}', [App\Http\Controllers\AdminController::class, 'school_delete'])->name('school-delete');
/*----------School Management---------------*/


/*---------- Employ Management ---------------*/

Route::get('employ', [App\Http\Controllers\AdminController::class, 'employ'])->name('employ');
Route::post('generate-employ-password', [App\Http\Controllers\AdminController::class, 'generate_employ_password'])->name('generate-employ-password');
Route::post('post-add-employ', [App\Http\Controllers\AdminController::class, 'post_add_employ'])->name('post-add-employ');
Route::post('post-update-employ', [App\Http\Controllers\AdminController::class, 'post_update_employ'])->name('post-update-employ');
Route::post('compare-employ', [App\Http\Controllers\AdminController::class, 'compare_employ'])->name('compare-employ');
Route::get('employ-delete/{id}', [App\Http\Controllers\AdminController::class, 'employ_delete'])->name('employ-delete');

Route::post('change-employ-status', [App\Http\Controllers\AdminController::class, 'change_employ_status'])->name('change-employ-status');

/*---------- Employ Management ---------------*/


/*---------- Class Management ---------------*/
Route::get('student-class', [App\Http\Controllers\AdminController::class, 'student_class'])->name('student-class');
Route::post('add-studentclass', [App\Http\Controllers\AdminController::class, 'add_studentclass'])->name('add-studentclass');
Route::post('post-update-class', [App\Http\Controllers\AdminController::class, 'post_update_class'])->name('post-update-class');

Route::get('class-delete/{id}', [App\Http\Controllers\AdminController::class, 'class_delete'])->name('class-delete');

/*---------- Class Management ---------------*/



/*----------Student Management---------------*/
Route::get('student', [App\Http\Controllers\AdminController::class, 'student'])->name('student');
Route::get('add-student', [App\Http\Controllers\AdminController::class, 'add_student'])->name('add-student');
Route::get('edit-student/{id}', [App\Http\Controllers\AdminController::class, 'edit_student'])->name('edit-student');
Route::get('add-student-physical-assessment', [App\Http\Controllers\AdminController::class, 'add_student_physical_assessment'])->name('add-student-physical-assessment');
Route::post('add-student-details', [App\Http\Controllers\AdminController::class, 'add_student_details'])->name('add-student-details');
Route::post('update-student-details', [App\Http\Controllers\AdminController::class, 'update_student_details'])->name('update-student-details');
Route::get('view-pdf', [App\Http\Controllers\AdminController::class, 'view_pdf'])->name('view-pdf');
/*----------Student Management---------------*/

	
/*---------- Section Management ---------------*/

Route::get('student-section', [App\Http\Controllers\AdminController::class, 'student_section'])->name('student-section');
Route::post('add-section', [App\Http\Controllers\AdminController::class, 'add_section'])->name('add-section');
Route::post('post-update-section', [App\Http\Controllers\AdminController::class, 'post_update_section'])->name('post-update-section');
Route::get('section-delete/{id}', [App\Http\Controllers\AdminController::class, 'section_delete'])->name('section-delete');


/*---------- Section Management ---------------*/

/*---------- SMS Management ---------------*/

Route::get('message', [App\Http\Controllers\AdminController::class, 'message'])->name('message');

/*---------- SMS Management ---------------*/

});
/*-------------- ADMIN DASHBOARD -----------------*/

Route::get('logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');
Route::get('employ-logout', [App\Http\Controllers\EmployController::class, 'logout'])->name('employ-logout');
Route::get('school-logout', [App\Http\Controllers\SchoolController::class, 'logout'])->name('school-logout');

