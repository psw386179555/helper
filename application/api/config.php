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

return [
    // 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle'       => 'app\lib\exception\ExceptionHandler',

    'default_return_type'    => 'json',

    'log' => [
        // 日志记录方式，内置 file socket 支持扩展
        'type'  => 'test',
        // 日志保存目录
        'path'  => LOG_PATH,
        // 日志记录级别
        'level' => [],
    ],

];
