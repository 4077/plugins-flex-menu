<?php namespace plugins\flexMenu\controllers;

class Main extends \Controller
{
    public function load()
    {
        $this->js('flexmenu');
    }

    public function bind()
    {
        $this->js('flexmenu');

        $this->js(':.bind', [
            'selector' => $this->data['selector'],
            'options'  => $this->data('options')
        ]);
    }
}
