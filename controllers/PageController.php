<?php

class PageController extends Controller
{
    public function view($nomPage)
    {
        echo 'Vous avez demandé la page: '.$nomPage;
        $phrase = 'Bienvenue sur la page '.$nomPage;
        $this->render('index');
    }
}