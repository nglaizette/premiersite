<?php

class Dispatcher
{
    public $request;

    public function __construct()
    {
        $this->request = new Request();
        echo Router::parse($this->request->url, $this->request);
    }
}