<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/12
 * Time: 19:38
 */

namespace app\api\service;
use app\api\model\HealthData;
use think\Loader;

class ExcelDeal
{
    public static function saveExcelData($path,$week,$year,$file_id)
    {
        $data = self::dealExcel($path,$week,$year,$file_id);
        $res = HealthData::saveData($data);
        return $res;
    }

   public static function dealExcel($path,$week,$year,$data_from)
   {
       Loader::import('PHPExcel.PHPExcel');
       Loader::import('PHPExcel.PHPExcel.IOFactory.PHPExcel_IOFactory');
       Loader::import('PHPExcel.Classes.PHPExcel.Reader.Excel5');
        $fileType = \PHPExcel_IOFactory::identify($path);
        $objReader =\PHPExcel_IOFactory::createReader($fileType);
        $obj_PHPExcel= $objReader->load($path);
        $data = [];
        $i = 0;
        foreach ($obj_PHPExcel->getWorksheetIterator() as $sheetKey => $sheet){//循环sheet
            if($sheetKey < 5 ){
            foreach ($sheet->getRowIterator() as $rowKey => $row){ //逐行处理
            if ($row->getRowIndex()<2){
                continue;
            }//前五个sheet才需要去除第一行

                $item = [];
                foreach ($row->getCellIterator() as $cell){ //逐列处理
                   array_push($item,$cell->getCalculatedValue());
                }
                if(self::checkData($item)){
                    $dataItem = self::prepareValue($item,$i,$data,$sheetKey,$week,$year,$data_from);
                }else{
                    continue;
                }
                array_push($data,$dataItem);
                $i++;
                }
            }
        }
        return $data;
   }

   private static function checkData($item)
   {
       if ($item[1]&&$item[2]&&$item[3]&&$item[4]&&$item[5]){
           return true;
       }else{
           return false;
       }
   }

   private static function prepareValue($item,$i,$data,$sheetKey,$week,$year,$data_from)
   {
       $dataItem['data_from'] = $data_from;
       $dataItem['year'] = $year;
       $dataItem['week'] = $week;
       $dataItem['class'] = ($item[0]==null)?$data[$i-1]['class']:$item[0];
       $dataItem['room'] = $item[1];
       $dataItem['bed'] = $item[2];
       $dataItem['floor'] = $item[3];
       $dataItem['desktop'] = $item[4];
       $dataItem['balcony'] = $item[5];
       $dataItem['room_score'] = $item[6];
       if($sheetKey<4){
           $dataItem['rank'] = ($item[7]==null)?$data[$i-1]['rank']:$item[7];;
           $dataItem['class_score'] =round(($item[8]==null)&&($data[$i-1]['class_score']!=null)?$data[$i-1]['class_score']:$item[8],2);
       }
       return $dataItem;
   }



}