<?php

class Controller
{
    public $request;
    public $vars = [];

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function render($view)
    {
        extract($this->vars);
        $view = ROOT.DS.'views'.DS.$this->request->controller.DS.$view.'.php';

        require $view;

        exit($view);
    }
}