<?php


/**
 * 后台路由
 */
//后台路由组

Route::group(['prefix'=>'/admin'],function (){
    //登录退出
    //显示登录表单的
    Route::get('/login','Admin\Auth\LoginController@showLoginForm');
    //接受处理登录表单数据的
    Route::post('/login','Admin\Auth\LoginController@postLogin');

    Route::get('/logout','Admin\Auth\LoginController@logout');
    Route::post('/register','Admin\Auth\LoginController@postRegister');

    //用户管理路由组
    Route::group(['prefix'=>'/user'],function (){
        Route::get('/list','Admin\User\ListController@showList');
        Route::get('/add','Admin\User\ListAddController@listAddUser');
        Route::post('/add','Admin\User\ListAddController@postAddUser');
        Route::get('/del','Admin\User\ListController@deleteUser');
    });

    //文章管理路由组
    Route::group(['prefix'=>'/article'],function (){
        //文章列表路由
        Route::get('/list','Admin\Article\ArticleController@articleShow');
        Route::get('/show','Admin\Article\ArticleController@show');
        //文章文章添加路由
        Route::get('/add','Admin\Article\ArticleAddController@article');
        Route::post('/add','Admin\Article\ArticleAddController@articleAdd');
        //文章删除路由
        Route::get('/del','Admin\Article\ArticleController@deleteArticle');
    });

    //文章分类管理路由组
    Route::group(['prefix'=>'/category'],function (){
        Route::get('/list','Admin\Category\CategoryController@categoryList');
        Route::get('/add','Admin\Category\CategoryAddController@categoryAdd');
        Route::get('/del','Admin\Category\CategoryDeleteController@deleteCategory');
    });

});

/**
 * 前台
 */
Route::get('/','Home\IndexController@indexHome')->name('home');
Route::get('life','Home\ArticleController@homeArticle')->name('life');
Route::get('light','Home\LightController@homeLight')->name('light');
Route::get('point','Home\PointController@homePoint')->name('point');
Route::get('ring','Home\RingController@homeRing')->name('ring');
Route::get('guest','Home\GuestController@homeGuest')->name('comment');




//用户中心
Route::group(['prefix'=>'user'],function (){
       Route::get('/','User\ProfileController@index');
});
