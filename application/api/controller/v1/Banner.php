<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/3
 * Time: 16:22
 */

namespace app\api\controller\v1;
use app\api\model\Banner as BannerModel;

class Banner extends BaseController
{
    public function getBanner()
    {
        $res = (new BannerModel())->getBanner();
        return $res;
    }
}