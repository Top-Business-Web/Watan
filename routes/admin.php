<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'AuthController@index')->name('admin.login');
    Route::POST('login', 'AuthController@login')->name('admin.login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', function () {
        return view('Admin/index');
    })->name('adminHome');

    #### Admins ####
    Route::resource('admins', 'AdminController');
    Route::POST('delete_admin', 'AdminController@delete')->name('delete_admin');
    Route::get('my_profile', 'AdminController@myProfile')->name('myProfile');


    #### Sliders ####
    Route::resource('sliders', 'SliderController');
    Route::post('slider.delete', 'SliderController@delete')->name('slider.delete');

    ### Areas ####
    Route::resource('areas', 'AreaController');
    Route::POST('areaDelete', 'AreaController@delete')->name('area.delete');

    ### subAreas ###
    Route::get('subArea/{id}', 'SubAreaController@index')->name('subArea');
    Route::post('subAreaDelete', 'SubAreaController@delete')->name('subArea.delete');
    Route::get('subArea.create/{country_id}', 'SubAreaController@create')->name('subArea.create');
    Route::post('subArea.store', 'SubAreaController@store')->name('subArea.store');
    Route::get('subArea.edit/{id}', 'SubAreaController@edit')->name('subArea.edit');
    Route::post('subArea.update/{id}', 'SubAreaController@update')->name('subArea.update');


    ### company ########
    Route::resource('companies', 'CompanyController');
    Route::post('companies.delete', 'CompanyController@delete')->name('companies.delete');


    ### users ########
    Route::resource('users', 'UserController');
    Route::post('users.delete', 'UserController@delete')->name('users.delete');
    Route::post('userActivation', 'UserController@userActivation')->name('userActivation');


    ### categories ########
    Route::resource('categories', 'CategoryController');
    Route::post('categories.delete', 'CategoryController@delete')->name('categories.delete');


    ###  subCategories ###################
    Route::get('subCategory/{id}', 'SubCategoryController@index')->name('subCategory');
    Route::post('subCategory', 'SubCategoryController@delete')->name('subCategory.delete');
    Route::get('subCategory.create/{category_id}', 'SubCategoryController@create')->name('subCategory.create');
    Route::post('subCategory.store', 'SubCategoryController@store')->name('subCategory.store');
    Route::get('subCategory.edit/{id}', 'SubCategoryController@edit')->name('subCategory.edit');
    Route::post('subCategory.update/{id}', 'SubCategoryController@update')->name('subCategory.update');


<<<<<<< HEAD
    #### Services  #########

    Route::resource('services','ServiceController');
    Route::POST('service','ServiceController@delete')->name('service.delete');


    #### Blogs   #################


    Route::resource('blogs','BlogController');
    Route::POST('delete/blog','BlogController@delete')->name('blog.delete');







=======
>>>>>>> 2b97b2fb576c9bb9c45cbc74f3b4174cdbbec634
    #### Auth ####


    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');


    ### Points #######


    Route::resource('points', 'PointController');
    Route::POST('delete_point', 'PointController@delete')->name('delete_point');


});










