<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/10/9
 * Time: 21:36
 */

namespace app\api\model;


class Heart extends BaseModel
{
    public function add($data)
    {
        $res = self::create($data);
        return $res;
    }

    public function show($date)
    {
        $res = self::where('date','like','%'.$date.'%')
            ->select();
        return $res;
    }
}