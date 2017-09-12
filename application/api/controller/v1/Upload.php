<?php
/**
 * Created by SvenBarnett.
 * Author 斯文<386179555@qq.com>
 * Date: 2017/9/6
 * Time: 13:42
 */

namespace app\api\controller\v1;


use app\lib\exception\UploadException;
use think\Config;
use app\api\model\Image as ImageModel;
use app\api\model\File as FileModel;

class Upload
{
    /**
     * 上传图片
     * @return array
     * @throws UploadException
     */
    public function uploadImage()
    {
        $file = request()->file('image');
        if (!$file) {
            throw new UploadException([
                'code' => 400,
                'msg' => 'no image source',
                'errorCode' => 40003
            ]);
        }
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');

        if ($info) {

            $path = getUploadPath('/uploads/' . $info->getSaveName());



            $imageModel = new ImageModel();

            $imgID = $imageModel->saveImage($path);

            $path = Config::get('settings.img_prefix').$path;

            $res = [
                'img_id'=>(int)$imgID,
                'path'=>$path
            ];

            return $res;
        } else {
            $msg = $file->getError();
            throw new UploadException([
                'code' => 400,
                'msg' => $msg,
                'errorCode' => 40003
            ]);

        }
    }


    /**
     * 上传文件doc xls ppt等
     * @return array
     * @throws UploadException
     */
    public function uploadFile()
    {
        $file = request()->file('file');
        if (!$file) {
            throw new UploadException([
                'code' => 400,
                'msg' => 'no file source',
                'errorCode' => 40003
            ]);
        }
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');

        if ($info) {

            $primary_path = getUploadPath('/uploads/' . $info->getSaveName());

            $filename = $info->getInfo('name');

            $fileModel = new FileModel();

            $fileID = $fileModel->saveFile($primary_path,$filename);

            $path = Config::get('settings.img_prefix').$primary_path;


            $res = [
                'file_name'=>$filename,
                'file_id'=>(int)$fileID,
                'path'=>$path,
                'primary_path'=>$primary_path
            ];

            return $res;

        } else {
            $msg = $file->getError();
            throw new UploadException([
                'code' => 400,
                'msg' => $msg,
                'errorCode' => 40003
            ]);

        }
    }
}