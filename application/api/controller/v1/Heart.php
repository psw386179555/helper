<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/10/9
 * Time: 21:35
 */

namespace app\api\controller\v1;
use app\api\model\Heart as HeartModel;

class Heart extends BaseController
{
    public function add($name,$class,$phone,$date,$time)
    {
        $data=[
            'name' =>$name,
            'class' => $class,
            'phone' => $phone,
            'date' =>$date,
            'time' => $time
        ];

        $heartModel = new HeartModel();

        $res = $heartModel->add($data);

        return $res;
    }

    public function showByDate($date)
    {
        $heartModel = new HeartModel();
        $res = $heartModel->show($date);
        return $res;
    }
}