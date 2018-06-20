<?php
/**
 * Created by PhpStorm.
 * User: yhy
 * Date: 2018/6/20
 * Time: 16:39
 */
class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction() {//默认Action
        $this->getView()->assign("content", "Hello World");
    }
}
