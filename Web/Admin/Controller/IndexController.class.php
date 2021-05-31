<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * 后台首页显示
 */
class IndexController extends Controller {

    //后台首页显示
    public function index(){

        $this->display();
    }
}