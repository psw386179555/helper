<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/6
 * Time: 21:03
 */

namespace app\api\validate;


class HealthValidate extends BaseValidate
{
    protected $rule=[
        'file_id'=>'require|isNotEmpty'
    ];

    protected $message=[
        'file_id'=>'file_id can not be empty'
    ];
}