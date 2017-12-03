<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/12/3
 * Time: 10:48
 */

namespace app\api\controller\v1;
use app\api\model\Info as InfoModel;

class Info extends BaseController
{
    public function getInfo()
    {
        $res = (new InfoModel())->getInfo();
        return $res;
    }
    public function getDetailById($id)
    {
        $res = (new InfoModel())->getDetailById($id);
        return $res;
    }
}