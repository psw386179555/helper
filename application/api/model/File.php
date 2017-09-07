<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/6
 * Time: 13:42
 */

namespace app\api\model;


use think\Config;

class File extends BaseModel
{
    protected $visible = ['file_name','file_url'];
    public function saveFile($path,$file_name,$from=1)
    {
        $file = self::create([
            'file_name'=>$file_name,
            'file_url'=>$path,
            'from' => $from
        ]);
        return $file->id;
    }

    public function getFileUrlAttr($value)
    {
        return Config::get('settings.file_prefix').$value;
    }
}