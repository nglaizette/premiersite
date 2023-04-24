<?php

class PageController extends Controller
{
    public function view($nomPage)
    {
        echo 'Vous avez demandé la page: '.$nomPage;
        $this->set('phrase', 'Bienvenue sur la page '.$nomPage);
        $this->render('index');
    }

    public function index()
    {
    }
}
