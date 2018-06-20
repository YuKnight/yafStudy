<?php
/**
 * Created by PhpStorm.
 * User: yhy
 * Date: 2018/6/20
 * Time: 16:37
 */
define("APP_PATH",  realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
$app  = new Yaf_Application(APP_PATH . "/conf/application.ini");
$app->run();