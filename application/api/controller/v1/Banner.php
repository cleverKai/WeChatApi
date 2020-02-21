<?php

namespace app\api\controller\v1;

use app\api\validate\IDMustBePostiveInt;
use think\Validate;

class Banner
{
    /*
     * @id 指定的bannerId
     * 获取指定id的banner的所有信息
     * @url /banner/:id
     * @http GET
     * */
    public function getBanner($id){
        // 验证器
        (new IDMustBePostiveInt())->goCheck();
//        $data = [
//            'id' => $id,
//        ];
////        $validate = new Validate([
////            'id' => ''
////        ]);
//        $validate = new IDMustBePostiveInt();
//        $result = $validate->batch()->check($data);
//        if($result){
//
//        }else{
//
//        }


    }

}