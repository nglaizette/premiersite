<?php

class Controller
{
    public $request;
    public $layout = 'default';
    private $vars = [];
    private $rendered = false;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function render($view)
    {
        if ($this->rendered) {
            return false;
        }
        extract($this->vars);
        $view = ROOT.DS.'views'.DS.$this->request->controller.DS.$view.'.php';
        ob_start();

        require $view;
        $content_for_layout = ob_get_clean();

        require ROOT.DS.'views'.DS.'layout'.DS.$this->layout.'.php';
        $this->rendered = true;
    }

    public function set($key, $value)
    {
        if (is_array($key)) {
            $this->vars += $key;
        } else {
            $this->vars[$key] = $value;
        }
    }
}
