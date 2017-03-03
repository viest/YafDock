<?php
/**
 * Created by PhpStorm.
 * User: VikinDev
 * Date: 2017/3/3
 * Time: 下午4:02
 */

define("APP_PATH",  realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
$app  = new Yaf_Application(APP_PATH . "/config/application.ini");
$app->run();