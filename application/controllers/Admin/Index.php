<?php
/**
 * Created by PhpStorm.
 * User: zwk
 * Date: 2016年1月31日 22:12:56
 */

class Admin_IndexController extends Base_Core {

    /**
     * admin
     */
    public function indexAction() {
        $test = new userModel();
        $res = $test->test();
        $this->getView()->assign('test',$res);
        $this->getView()->display('index/index.phtml');
    }

    /**
     * admin
     */
    public function ownerAction() {

    }

}