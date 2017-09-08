<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/8
 * Time: 17:53
 */

namespace app\api\validate;


class MessageValidate extends BaseValidate
{
    protected $rule = [
        'content'=>'isNotEmpty'
    ];
    protected $message = [
        'content' => 'content can not be empty'
    ];
}