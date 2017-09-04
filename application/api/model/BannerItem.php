<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/4
 * Time: 9:10
 */

namespace app\api\model;


class BannerItem extends BaseModel
{
   protected $visible = ['title','img'];

    public function img()
    {
        return $this->belongsTo('Image','img_id','id');
    }
}