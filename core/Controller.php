<?php

class Controller
{
    protected $data;

    // Chamado por todos os CONTROLLERS
    protected function loadTemplate($viewName, $modelData = [])
    {
        $this->data = $modelData;
        require 'view/template.php';
    }

    // Chamado no template
    public function loadViewOnTemplate($viewName, $modelData = [])
    {
        extract($modelData);

        require 'view/' . $viewName . '.php';
    }
}
