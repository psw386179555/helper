<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/4
 * Time: 9:05
 */

namespace app\api\model;


use think\Config;

class Image extends BaseModel
{
    protected $visible = ['img_url'];

    public function getImgUrlAttr($value)
    {
        return Config::get('settings.img_prefix').$value;
    }
}