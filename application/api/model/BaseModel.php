<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/4
 * Time: 9:03
 */

namespace app\api\model;


use think\Model;
use traits\model\SoftDelete;

class BaseModel extends Model
{
    /**
     * 添加软删除
     */
    use SoftDelete;
    protected $deleteTime = 'delete_time';


}