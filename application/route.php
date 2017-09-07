<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;


Route::group('api/:version/banner',function (){
    Route::get('','api/:version.Banner/getBanner');
});


Route::group('api/:version/token',function (){
    Route::post('/app','api/:version.Token/getAppToken');
    Route::post('/user','api/:version.Token/getToken');
    Route::post('/verify','api/:version.Token/verifyToken');
});

Route::group('api/:version/health',function (){
    Route::post('/wechat/list','api/:version.Health/showListForWechat');
    Route::post('/app/add','api/:version.Health/addHealthRet');
    Route::post('/app/list','api/:version.Health/showHealthRet');
});

Route::group('api/:version/upload',function (){
    Route::post('/file','api/:version.Upload/uploadFile');
});