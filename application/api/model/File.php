<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/6
 * Time: 13:42
 */

namespace app\api\model;


class File extends BaseModel
{
    public function saveFile($path)
    {
        $file = self::create([
            'file_url'=>$path
        ]);

        return $file->id;
    }
}