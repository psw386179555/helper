<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/3
 * Time: 16:30
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    /**
     * 验证方法
     * @return bool
     * @throws ParameterException
     */
    public function goCheck()
    {
        $request = Request::instance();

        $params = $request->param();

        $result=$this->batch()->check($params);

        if(!$result){
            $e = new ParameterException([
                'msg'=>$this->error
            ]);
            throw $e;
        }
        else{
            return true;
        }
    }

    /**
     * 是否是正整数验证
     * @param $value
     * @param string $rule
     * @param string $data
     * @param string $field
     * @return bool
     */
    protected function isPositiveInteger($value,$rule='',$data='',$field='')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    /**
     * 不为空验证
     * @param $value
     * @param string $rule
     * @param string $data
     * @param string $field
     * @return bool
     */
    protected function isNotEmpty($value,$rule='',$data='',$field='')
    {
        if (empty($value))
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}