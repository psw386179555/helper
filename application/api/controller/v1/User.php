<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/8
 * Time: 18:39
 */

namespace app\api\controller\v1;


use app\api\service\Token;
use app\api\validate\UserParamsValidate;
use app\api\model\User as UserModel;
class User
{
    public function addUser($headimg,$nickname)
    {
        (new UserParamsValidate())->goCheck();

        $uid = Token::getCurrentUid();

        $data['headimg'] = $headimg;
        $data['nickname'] = $nickname;

        $res = (new UserModel())->add($uid,$data);
        return $res;

    }
}