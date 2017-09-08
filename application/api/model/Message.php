<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/8
 * Time: 17:42
 */

namespace app\api\model;


class Message extends BaseModel
{
    protected $visible=['content','user','create_time'];

    public static function addSay($data)
    {
        $res = self::create($data);
        return $res;
    }

    public static function getSayList()
    {
        $res = self::with('user')->select(function($query){
            $query->order('create_time desc');
        });

        return $res;
    }

    public function user()
    {
        return $this->hasOne('User','id','uid');
    }
}