<?php

/**
 * Created by PhpStorm.
 * User: vikin
 * Date: 2017/3/3
 * Time: 下午4:10
 */
class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        $this->getView()->assign("content", "Hello World");
    }

    public function testAction ()
    {
        $this->getView()->assign("content", "Hello test");
    }
}
