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

