<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/8/16
 * Time: 10:38
 */

return [
    'app_id'=> 'wxcc465185f2810231',
    'app_secret'=>'b472884f6417dd21d043368137a91903',
    'login_url'=>"https://api.weixin.qq.com/sns/jscode2session?".
        "appid=%s&secret=%s&js_code=%s&grant_type=authorization_code"
];