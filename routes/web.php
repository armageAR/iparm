<?php

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

Route::get('/', function () {    return view('welcome');});
Route::get('/employers', function () {    return view('employers');})->name('employers');
Route::get('/students', function () {    return view('students');})->name('students');
Route::get('/notverified',function () {    return view('notverified');})->name('notverified');

Route::get('/verify/{token}', 'Auth\\VerifyEmailController@verify')->name('verify');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/employer/register','EmployerController@create')->name('employer.register');
Route::post('/employer/register','EmployerController@store')->name('employer.register');

Route::get('/student/register','StudentController@create')->name('student.register');
Route::post('/student/register','StudentController@store')->name('student.register');




Route::middleware(['auth'])->group(function(){


	Route::get('/employer/home',function () {    return view('/employer/home');});
	Route::get('/admin/home',function () {    return view('/admin/home');});

	//Roles
	Route::post('admin/roles', 'Admin\\RoleController@store')->name('admin.roles.store')->middleware('permission:roles.create');
	Route::get('admin/roles', 'Admin\\RoleController@index')->name('admin.roles.index')->middleware('permission:roles.index');
	Route::get('admin/roles/create', 'Admin\\RoleController@create')->name('admin.roles.create')->middleware('permission:roles.create');
	Route::patch('admin/roles/{role}', 'Admin\\RoleController@update')->name('admin.roles.update')->middleware('permission:roles.edit');
	Route::get('admin/roles/{role}', 'Admin\\RoleController@show')->name('admin.roles.show')->middleware('permission:roles.show');
	Route::delete('admin/roles/{role}', 'Admin\\RoleController@destroy')->name('admin.roles.destroy')->middleware('permission:roles.destroy');
	Route::get('admin/roles/{role}/edit', 'Admin\\RoleController@edit')->name('admin.roles.edit')->middleware('permission:roles.edit');

	//Permisions
	Route::post('admin/permissions', 'Admin\\PermissionController@store')->name('admin.permissions.store')->middleware('permission:permissions.create');
	Route::get('admin/permissions', 'Admin\\PermissionController@index')->name('admin.permissions.index')->middleware('permission:permissions.index');
	Route::get('admin/permissions/create', 'Admin\\PermissionController@create')->name('admin.permissions.create')->middleware('permission:permissions.create');
	Route::patch('admin/permissions/{permission}', 'Admin\\PermissionController@update')->name('admin.permissions.update')->middleware('permission:permissions.edit');
	Route::get('admin/permissions/{permission}', 'Admin\\PermissionController@show')->name('permissions.show')->middleware('permission:permissions.show');
	Route::delete('admin/permissions/{permission}', 'Admin\\PermissionController@destroy')->name('admin.permissions.destroy')->middleware('permission:permissions.destroy');
	Route::get('admin/permissions/{permission}/edit', 'Admin\\PermissionController@edit')->name('admin.permissions.edit')->middleware('permission:permissions.edit');

	//Users
	Route::get('admin/users', 'Admin\\UserController@index')->name('admin.users.index')->middleware('permission:users.index');
	Route::patch('admin/users/{user}', 'Admin\\UserController@update')->name('users.update')->middleware('permission:users.edit');
	Route::get('admin/users/{user}', 'Admin\\UserController@show')->name('users.show')->middleware('permission:users.show');
	Route::delete('admin/users/{user}', 'Admin\\UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');
	Route::get('admin/users/{user}/edit', 'Admin\\UserController@edit')->name('users.edit')->middleware('permission:users.edit');



});