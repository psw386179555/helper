<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/8
 * Time: 17:41
 */

namespace app\api\controller\v1;


use app\api\model\Message;
use app\api\service\Token;
use app\api\validate\MessageValidate;

class Say extends BaseController
{
    public function addSay($content)
    {
        (new MessageValidate())->goCheck();
        $uid = Token::getCurrentUid();
        $data['uid'] = $uid;
        $data['content'] = $content;
        $res = Message::addSay($data);
        return $res;
    }

    public function getSayList()
    {
        $res = Message::getSayList();
        return $res;
    }
}