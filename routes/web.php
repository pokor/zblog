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
    //退出
    Route::get('/logout','Admin\Auth\LogoutController@logout');
    //评论显示路由
    Route::get('/comment','Admin\Comment\CommentController@commentList');
    Route::get('/comment/del','Admin\Comment\CommentController@delComment');


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

});

/**
 * 前台
 */
    Route::get('/','Home\IndexController@indexHome')->name('home');
    Route::get('/guest','Home\GuestController@homeGuest')->name('comment');
    Route::post('/message','Home\GuestController@message')->name('message');
    Route::get('/life','Home\LifeController@showLife')->name('life');
    Route::post('/message','Home\GuestController@message')->name('message');
    Route::get('/article/{id}','Home\ArticleController@info')->name('article');




//用户中心
Route::group(['prefix'=>'user'],function (){
       //建立游客登录路由
        Route::get('/','User\ProfileController@index');
        Route::post('login','User\ProfileController@post');

});
