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

        // récupératon des n

        if (!in_array($this->request->action, get_class_methods($controller))) {
            $this->error('Le controller '.$this->request->controller.'n a pas de méthode '.$this->request->action);

            exit;
        }
        call_user_func([$controller, $this->request->action], $this->request->params[0]);
    }

    public function error($message)
    {
        header('HTTP/1.0 404 Not Found');
        $controller = new Controller($this->request);
        $controller->set('message', $message);
        $controller->render('/errors/404');
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
