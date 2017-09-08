<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/6
 * Time: 14:05
 */

namespace app\api\model;


class User extends BaseModel
{
    protected $hidden = ['create_time','delete_time','update_time','status','openid'];

    public static function getByOpenID($openid)
    {
        $member = self::where('openid','=',$openid)->find();
        return $member;
    }

    public function add($uid,$data)
    {
        $res = self::update($data,[
            'id'=>$uid
        ]);
        return $res;
    }

}