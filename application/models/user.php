<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/21
 * Time: 9:35
 */

class userModel extends Base_Db {
    public function test() {
        $res = $this->db->from('thing_user')->fetchAll();
        return $res;
    }
}