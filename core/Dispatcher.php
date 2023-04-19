<?php

class Dispatcher
{
    public $request;

    public function __construct()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);
        // print_r($this->request);
        $controller = $this->loadController();
        $controller->view();
    }

    private function loadController()
    {
        $name = ucfirst($this->request->controller).'Controller';
        $file = ROOT.DS.'controllers'.DS.$name.'.php';
        print_r($file);

        require $file;

        return new $name($this->request);
    }
}