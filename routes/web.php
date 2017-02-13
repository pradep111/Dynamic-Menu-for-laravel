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

Route::get('/', 'NavigationController@Menus');



Route::get('/Menus','NavigationController@Menus');
Route::post('/add_menu','NavigationController@AddMenu');
Route::post('/menuData','NavigationController@MenuData');
Route::post('/update_menu','NavigationController@Update_Menu_Data');
Route::post('/delete_menu','NavigationController@Delete_Menu_Item');
Route::post('/sortmenuitem','NavigationController@SortMenuItem');
Route::post('/get_total_children','NavigationController@Get_total_children');
Route::post('//sortchildmenuitem','NavigationController@SortchildMenuItem');
