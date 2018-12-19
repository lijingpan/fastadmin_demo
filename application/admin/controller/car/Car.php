<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/12/6
 * Time: 11:06
 */

namespace app\admin\controller\car;

use app\common\controller\Backend;
use think\Db;

class Car extends Backend
{
    public function _initialize()
    {
        parent::_initialize();
    }


    public function index()
    {
        $this->view->assign('data', "111");
        return $this->view->fetch();
    }
}