<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/3
 * Time: 16:22
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePositiveInt;

class Banner
{
    public function getBanner($id)
    {

        (new IDMustBePositiveInt())->goCheck();

        echo $id;
    }
}