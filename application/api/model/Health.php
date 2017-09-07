<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/6
 * Time: 21:05
 */

namespace app\api\model;


use think\Config;

class Health extends BaseModel
{
    /**
     * 第三方app
     * @param $title
     * @param $file_id
     * @return $this
     */
    public static function addHealthRet($title,$file_id)
    {
        $res = self::create([
            'title'=>$title,
            'file_id'=>$file_id
        ]);
        return $res;
    }

    /**
     * 第三方app
     * @param $page
     * @param $rows
     * @return mixed
     */

    public static function showHealthRet($page,$rows)
    {

        $res = self::with('item')->paginate($rows,true,['page'=>$page])->all();
        $total = self::count();

        $arr['total']= $total;
        $arr['rows'] = $res;
        return $arr;
    }

    public function item()
    {
        return $this->hasOne('File','id','file_id');
    }

}