<?php
/**
 * Created by PhpStorm.
 * User: vikin
 * Date: 2017/3/4
 * Time: 上午9:24
 */

use \Yaf\Bootstrap_Abstract as YafBootstrap;
use \Yaf\Dispatcher;
use \Yaf\Loader;

use Illuminate\Events\Dispatcher as LarDispatcher;
use Illuminate\Container\Container as LarContainer;
use Illuminate\Database\Capsule\Manager as LarCapsule;

class Bootstrap extends YafBootstrap
{
    /**
     * 加载composer autoload文件
     *
     * @param Dispatcher $dispatcher
     */
    public function _initComposerAutoload(Dispatcher $dispatcher)
    {
        $autoload = APP_PATH . '/vendor/autoload.php';

        if (file_exists($autoload)) {
            Loader::import($autoload);
        }
    }

    /**
     * init ORM
     *
     * @param Dispatcher $dispatcher
     */
    public function _initORM (Dispatcher $dispatcher)
    {
        $larCapsule = new LarCapsule();

        $config = \Yaf\Application::app()->getConfig();

        $larCapsule->addConnection($config->database->toArray());
        $larCapsule->setEventDispatcher(new LarDispatcher(new LarContainer()));
        $larCapsule->setAsGlobal();
        $larCapsule->bootEloquent();
    }

    /**
     * autoload file
     *
     * @param Dispatcher $dispatcher
     */
    public function _initLoader (Dispatcher $dispatcher)
    {
        //Loader::import('file');
    }
}