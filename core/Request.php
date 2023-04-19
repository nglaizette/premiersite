<?php

class Request
{
    public $url; // URL appelée par l'utilisateur

    public function __construct()
    {
        $this->url = $_SERVER['PATH_INFO'];
    }
}