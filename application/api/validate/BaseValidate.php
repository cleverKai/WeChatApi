<?php


namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public  function goCheck(){
        // 获取http传入的变量
        // 对这些参数做校验
        $request = Request::instance();
        //拿到http的所有参数
        $params = $request->param();
        $result = $this->check($params);
        if(!$result){
            $error = $this->error;
            throw new Exception($error);
        }else{
            return true;
        }
    }


}