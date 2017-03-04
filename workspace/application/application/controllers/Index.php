<?php
/**
 * Created by PhpStorm.
 * User: vikin
 * Date: 2017/3/3
 * Time: 下午4:10
 */

use App\Models\User;

class IndexController extends \Yaf\Controller_Abstract
{
    /**
     * @return mixed
     */
    public function indexAction()
    {
        // ORM test
        // $user = User::find(1);
        // dd($user);

        $demoService = new App\Services\Index\DemoService();

        $content = $demoService->getContent();

        return $this->getView()->assign("content", $content);
    }
}
