<?php


/**
 * 后台路由
 */
//后台路由组

Route::group(['prefix'=>'/admin'],function (){
    //登录退出
    Route::get('/login','Admin\Auth\LoginController@showLoginForm');
    Route::get('/logout','Admin\Auth\LogoutController@logout');

    //用户管理路由组
    Route::group(['prefix'=>'/user'],function (){
        Route::get('/list','Admin\User\ListController@showList');
        Route::get('/add','Admin\user\ListAddController@listAddUser');
        Route::get('/del','Admin\user\ListController@deleteUser');
    });

    //文章管理路由组
    Route::group(['prefix'=>'/article'],function (){
        Route::get('/list','Admin\Article\ArticleController@articleShow');
        Route::get('/add','Admin\Article\ArticleAddController@articleAdd');
        Route::get('/del','Admin\Article\ArticleController@deleteArticle');
    });

    //文章分类管理路由组
    Route::group(['prefix'=>'/category'],function (){
        Route::get('/list','Admin\Category\CategoryController@categoryList');
        Route::get('/add','Admin\Category\CategoryAddController@categoryAdd');
        Route::get('/del','Admin\Category\CategoryDeleteController@deleteCategory');
    });
    Route::group(['prefix'=>'/home'],function (){
        Route::get('/index','Admin\Home\IndexController@indexHome');
        Route::get('/life','Admin\Home\HomeArticleController@homeArticle');
        Route::get('/light','Admin\Home\HomeLightController@homeLight');
        Route::get('/point','Admin\Home\HomePointController@homePoint');
        Route::get('/ring','Admin\Home\HomeRingController@homeRing');
        Route::get('/guest','Admin\Home\HomeGuestController@homeGuest');
    });
});


Route::get('/',function (){
    dd(1);
});

