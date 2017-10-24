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



//////////////////////Test//////////////////////////////////

/* Route::get('admin/test/savedata', function (){
	$menu = new App\Menu();
	$menu->title = "menu test 1";
	$menu->parent_id = "2";
	
	$menu->save();
	echo "inserted data successlly";
});
 */

Route::get('admin/test/getcategories', function (){
	echo 'get categories';
});



//////////////////////For font end//////////////////////////////////
Route::get('login', "UserController@getLogin");
Route::get('register', "UserController@getRegister");
Route::get('recoverpwd', "UserController@getRecoverPassword");


Route::get('/','IndexController@getIndexRound');


//Pages
Route::group(['prefix'=>'page/'],function (){
	Route::get('radical/','PagesController@getGridCardByRadical');
	Route::get('onyomi/','PagesController@getGridCardByOnyomil');
	Route::get('kakusu/','PagesController@getGridCardByKakusu');
	Route::get('jlpt/','PagesController@getGridCardByJlpt');
	Route::get('kanken/','PagesController@getGridCardByKanken');
	Route::get('topic/','PagesController@getGridCardByTopic');
	Route::get('school/','PagesController@getGridCardBySchool');
	Route::get('bookmark/','PagesController@getGridCardByBookmark');
	Route::get('tag/','PagesController@getGridCardByTag');
});

//kanji
Route::group(['prefix'=>'kanji/'],function (){
	Route::get('gridcard/','KanjisController@getGridCard');
	Route::get('detail/','KanjisController@getKanjiDetail');
});

//words
Route::group(['prefix'=>'word/'],function (){
	Route::get('detail/','WordController@getDetail');
});


//Detail kanji
Route::group(['prefix'=>'detail/'],function (){
	Route::get('/','OnyomiController@getCategories');
	Route::get('card/','OnyomiController@getCards');
	Route::get('detail/','OnyomiController@getDetail');
});








//////////////////////For Admin Page//////////////////////////////////
Route::get('admin/login', "UserController@getAdminLogin");
Route::post('admin/login', "UserController@postAdminLogin");
Route::get('admin/logout', "UserController@getAdminLogout");
Route::get('admin/index', "MenuController@getList");

//test
Route::get('admin/thu', function(){
	return view('admin.menu.list');
});
Route::get('admin/edit', function(){
	return view('admin.menu.edit');
});


Route::get('admin/', "DashboardController@getDefault");
Route::get('admin/category', "CategoryController@getList");

Route::group(['prefix'=>'admin'],function (){
	Route::group(['prefix'=>'user'],function (){
		Route::get('list','UserController@getList');
		Route::get('add','UserController@getAdd');
		Route::post('edit','UserController@postEdit');
	});

	Route::group(['prefix'=>'cat'],function (){
        // Matches The "/admin/users" URL
		Route::get('list/','CategoryController@getCategoriesList');
		Route::get('subcat/','CategoryController@getSubCategoriesList');
		
    });


});



    
/*
if(DB::connection()->getDatabaseName()){
	echo "connected successfully to database ".DB::connection()->getDatabaseName();
}
*/
