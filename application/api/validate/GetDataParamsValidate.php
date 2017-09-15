<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/15
 * Time: 15:03
 */

namespace app\api\validate;


class GetDataParamsValidate extends BaseValidate
{
    protected $rule = [
        'week'=>'require|isNotEmpty',
        'year'=>'require|isNotEmpty',
        'room'=>'require|isNotEmpty',
    ];

    protected $message = [
        'week' => '必选传入周数！' ,
        'year'=>'必选传入学期数！',
        'room'=>'必须传入宿舍号',
    ];
}