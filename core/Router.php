<?php

class Router
{
    /**
     * Permet de parser une url.
     *
     * @param $url URL à parser
     * @param mixed $request
     *
     * @return tableau
     */
    public static function parse($url, $request)
    {
        $url = trim($url, '/');
        $params = explode('/', $url);
        print_r($params);
        // stockage dans l'objet $request
        $request->controller = $params[0];
        $request->action = isset($params[1]) ? $params[1] : 'index';
        $request->params = array_slice($params, 2); // tout sauf les deux premiers parametres
    }
}