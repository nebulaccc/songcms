<?php
/**
 * Module     : 后台管理
 * -------------------------------------------------------------
 * Description:
 * ------------------------------------------------------------- 
 * Author     : Nebula (nebula212@163.com)
 * Date       : 2014-08-08
 * ------------------------------------------------------------- 
 */
class AdminModule extends CWebModule
{
    public function beforeControllerAction($controller, $action) {
        if (parent::beforeControllerAction($controller, $action)) {
            return true;
        } else {
            return false;
        }
    }
}
