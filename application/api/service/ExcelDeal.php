<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/12
 * Time: 19:38
 */

namespace app\api\service;
use think\Loader;

class ExcelDeal
{
   public static function deal($path)
   {
       Loader::import('PHPExcel.PHPExcel');
       Loader::import('PHPExcel.PHPExcel.IOFactory.PHPExcel_IOFactory');
//       Loader::import('PHPExcel.Classes.PHPExcel.Reader.Excel5');
        $fileType = \PHPExcel_IOFactory::identify($path);
        $objReader =\PHPExcel_IOFactory::createReader($fileType);
        $obj_PHPExcel= $objReader->load($path);

        foreach ($obj_PHPExcel->getWorksheetIterator() as $sheetKey => $sheet){//循环sheet
            foreach ($sheet->getRowIterator() as $row){ //逐行处理
                if($sheetKey < 5 ){
                    if ($row->getRowIndex()<2){
                        continue;
                    }//前五个sheet才需要去除第一行
                }
                foreach ($row->getCellIterator() as $cell){ //逐列处理
                    //TODO::处理数据
                }
            }
        }


//        $excel_array=$obj_PHPExcel->getsheet(0)->toArray();   //转换为数组格式
//        array_shift($excel_array);  //删除第一个数组(标题);
//        $city = [];
//        foreach($excel_array as $k=>$v) {
//               $city[$k]['Id'] = $v[0];
//               $city[$k]['code'] = $v[1];
//               $city[$k]['path'] = $v[2];
//               $city[$k]['pcode'] = $v[3];
//               $city[$k]['name'] = $v[4];
//           }

   }

}