<?php namespace std\ui\layer\controllers;

class Main extends \Controller
{
    // todo z-index

    public function addContainer()
    {
        $this->app->html->addContainer($this->_nodeInstance());
    }

    public function open()
    {
        $this->addContainer();

        $containerSelector = $this->app->html->getContainerSelector($this->_nodeInstance());

        $this->jquery($containerSelector)->html($this->view());
    }

    public function close()
    {
        $this->widget(':|', 'onClose');

        $this->app->html->removeContainer($this->_nodeInstance());
    }

    public function view()
    {
        $v = $this->v('|');

        $v->assign([
                       'CONTENT' => $this->_call($this->data('content_call'))->perform()
                   ]);

        $this->css(':\css\std~');

        $this->widget(':|', [
            'paths' => [
                'close' => $this->_p('>xhr:close|')
            ]
        ]);

        return $v;
    }
}
