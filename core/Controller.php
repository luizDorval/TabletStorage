<?php

class Controller
{
    public $data;

    public $url;

    public function __construct()
    {
        $this->data = [];
    }
    // Chamado por todos os CONTROLLERS
    public function loadTemplate($viewName, $modelData = [], $url = [])
    {
        $this->data = $modelData;
        $this->url = $url;
        require 'views/template.php';
    }

    // Chamado no template
    public function loadViewOnTemplate($viewName, $modelData = [])
    {
        extract($modelData);

        require 'views/' . $viewName . '.php';
    }
}
