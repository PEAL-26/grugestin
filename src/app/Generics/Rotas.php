<?php

namespace App\Generics;

use Config\Services;

class Rotas
{
    public   static function CRUD($routes,  $url, $controller, $pathController = null)
    {

        $_path = $pathController ?  $pathController . '\\' : '';

        $routes->get($url,  $_path . $controller . '::index');
        //$routes->get($url . '/([a-zA-Z]+)',  $_path . $controller . '::pesquisar/$1');
        $routes->get($url . '/novo',  $_path . $controller . '::getCreate');
        $routes->post($url . '/novo',  $_path . $controller . '::postCreate');
        $routes->get($url . '/alterar/(:num)',  $_path . $controller .  '::getEdit/$1');
        $routes->post($url . '/alterar/(:num)', $_path .  $controller . '::postEdit/$1');
        $routes->delete($url . '/remover/(:num)',  $_path .  $controller . '::delete/$1');
    }
}
