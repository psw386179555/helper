<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/8
 * Time: 18:41
 */

namespace app\api\validate;


class UserParamsValidate extends BaseValidate
{
    protected $rule = [
      'headimg' => 'require|isNotEmpty' ,
        'nickname' => 'require|isNotEmpty'
    ];
    protected $message = [
      'headimg' =>'avatar can not be empty',
        'nickname' =>'nickname can not be empty'
    ];
}