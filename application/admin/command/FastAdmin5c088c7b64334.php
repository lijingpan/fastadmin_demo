<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/12/6
 * Time: 10:20
 */
use app\common\controller\Backend;

class car extends Backend
{

    public function car()
    {
        return $this->view->fetch();
    }

}