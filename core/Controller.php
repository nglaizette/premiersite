<?php

class Controller
{
    public $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function render($view)
    {
        $view = ROOT.DS.'views'.DS.$this->request->controller.DS.$view.'.php';

        exit($view);
    }
}