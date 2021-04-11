<?php

class Core
{
    /**
     * Método construtor
     */
    public function __construct()
    {
        $this->run();
    }

    /**
     * Método que constroí a url
     *
     * @return void
     */
    public function run()
    {
        if (isset($_GET["page"])) {
            $url = $_GET["page"];
        }

        // Caso possua informações após a url entrara aqui
        if (!empty($url)) {
            $url = explode('/', $url);
            $controller = $url[0] . 'Controller';
            array_shift($url);

            // Se um método for requisitado entra aqui
            if (isset($url) && !empty($url)) {
                $method = $url[0];
                array_shift($url);
            } else {
                $method = 'index';
            }

            (count($url) > 0) ? $parameters = $url : $parameters = [];
        } else {
            $controller = 'HomeController';
            $method = 'index';
            $parameters = [];
        }

        $controller_url = BASEURL . '/Controllers' . $controller . '.php';

        if (!file_exists($controller_url) && !method_exists($controller, $method)) {
            $controller = 'ErrorController';
            $method = 'index';
        }

        $controllerInstance = new $controller;

        call_user_func_array([$controllerInstance, $method], $parameters);
    }
}
