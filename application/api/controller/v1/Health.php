<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/6
 * Time: 21:01
 */

namespace app\api\controller\v1;


use app\api\validate\HealthValidate;
use app\api\model\Health as HealthModel;

class Health extends BaseController
{

    public function showListForWechat()
    {
        $res = HealthModel::showHealthRet(1,20);
        return $res;
    }


    public function addHealthRet($title,$file_id)
    {
        (new HealthValidate())->goCheck();
        $res = HealthModel::addHealthRet($title,$file_id);
        return $res;
    }

    public function showHealthRet($page,$rows)
    {
        $res = HealthModel::showHealthRet($page,$rows);
        return $res;
    }
}