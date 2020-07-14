<?php

namespace App;

class URLHelper
{
    /**
     * @param mixed $param
     * @param mixed $val
     * 
     * @return tout le contenu du tableau get dans l'url
     */
    public static function withParam($data, $param, $val)
    {
        return http_build_query(array_merge($data, [$param => $val])); // on ajoute a la fin du tableau get page => numéro de la page
    }
    /*ancienne version avec $_GET */
    /*public static function withParam($param, $val)
    {
        return http_build_query(array_merge($_GET, [$param => $val])); // on ajoute a la fin du tableau get page => numéro de la page
    }*/
    public static function withParams($data, $params)
    {
        return http_build_query(array_merge($params, $data));
    }
}