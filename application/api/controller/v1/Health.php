<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/6
 * Time: 21:01
 */

namespace app\api\controller\v1;


use app\api\model\Health as HealthModel;
use app\api\model\HealthData;
use app\api\service\ExcelDeal;
use app\api\validate\GetDataParamsValidate;
use app\api\validate\HealthValidate;
use think\Db;
use think\Exception;

class Health extends BaseController
{

    public function showListForWechat()
    {
        $res = HealthModel::showHealthRet(1,20);
        return $res;
    }


    public function addHealthRet($title,$file_id,$file_path,$week,$year)
    {
        (new HealthValidate())->goCheck();
        Db::startTrans();
        try{

            $data = ExcelDeal::saveExcelData($file_path,$week,$year);
            $res = HealthModel::addHealthRet($title,$file_id);
            Db::commit();
        }catch (Exception $e){
            Db::rollback();
            return false;
        }
        return true;
    }

    public function showHealthRet($page,$rows)
    {
        $res = HealthModel::showHealthRet($page,$rows);
        return $res;
    }


    public function getDataByRoom($year,$week,$room,$class)
    {
        (new GetDataParamsValidate())->goCheck();

        $pre = HealthData::getDataByRoomParam($year,$week-1,$room,$class);
        $cur = HealthData::getDataByRoomParam($year,$week,$room,$class);
        if ($pre){
            $pre->hidden(['id','create_time','update_time','delete_time']);
        }
        if ($cur){
            $cur->hidden(['id','create_time','update_time','delete_time']);
        }

        $res = [
            'pre'=>$pre,
            'cur'=>$cur
        ];
        return $res;

    }

}