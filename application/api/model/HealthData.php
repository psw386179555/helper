<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/14
 * Time: 16:50
 */

namespace app\api\model;


class HealthData extends BaseModel
{
    public static function saveData($data)
    {
        $healthData = new HealthData();
        return $healthData->saveAll($data, false);
    }

    public static function getDataByRoomParam($year,$week,$room,$class)
    {
        $res = self::where('year','like','%'.$year.'%')
            ->where('week','like','%'.$week.'%')
            ->where('room','like','%'.$room.'%')
            ->where('class','like','%'.$class.'%')
            ->find();
        return $res;
    }
}