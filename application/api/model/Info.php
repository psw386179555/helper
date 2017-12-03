<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/12/3
 * Time: 10:49
 */

namespace app\api\model;


class Info extends BaseModel
{
    public function getInfo()
    {
        $res = self::order('id','desc')->limit(5)->select();
        return $res;
    }
    public function getDetailById($id)
    {
        $res = self::get([
            'id'=>$id
        ]);
        return $res;
    }
}