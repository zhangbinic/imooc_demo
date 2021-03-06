<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// http://tp.php.zhangbin.work/acceptCache
/*Route::get('/', function () {
    return 'ThinkPHP 5.1.37';
});*/
Route::get('/', 'index/content');
Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

//Route::get('hello/:name', 'index/hello');

//实践缓存操作
Route::get('setCache', 'index/setCache');
Route::get('getCache', 'index/getCache');
//ajax缓存练习
Route::get('sendCache', 'index/sendCache');
Route::get('acceptCache', 'index/acceptCache');
Route::get('showCache', 'index/showCache');
//抓取网页信息
Route::get('pageFor','index/pageFor');
Route::get('pageShow','index/pageShow');

Route::get('simhash','index/testSimhash');

//生成1万个数值的一维数组
Route::get('createArray','index/createArray');
Route::get('getArray','index/getArray');
Route::get('findValue1','index/findValue1');
Route::get('binarySearch','index/binarySearch');
Route::get('logCal','index/logCal');

Route::get('index','Redis/index');

return [

];
