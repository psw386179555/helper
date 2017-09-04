<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/4
 * Time: 9:03
 */

namespace app\api\model;


class Banner extends BaseModel
{
    protected $visible = ['title','item'];

    public function getBanner()
    {
        $res = self::with('item,item.img')->where('status','eq',1)->find();
        return $res;
    }

    public function item()
    {
        return $this->hasMany('BannerItem','banner_id','id')->where('status','eq',1);
    }
}