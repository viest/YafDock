<?php
/**
 * Created by PhpStorm.
 * User: VikinDev
 * Date: 2017/3/3
 * Time: 下午4:02
 */

define("APP_PATH",  realpath(dirname(__FILE__) . '/../'));

$app  = new \Yaf\Application(APP_PATH . "/config/application.ini");

$app->bootstrap()->run();