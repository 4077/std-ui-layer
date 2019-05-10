<?php namespace std\ui\layer\controllers\main;

class Xhr extends \Controller
{
    public $allow = self::XHR;

    public function close()
    {
        $this->app->html->removeContainer($this->_nodeInstance('<'));
    }
}
