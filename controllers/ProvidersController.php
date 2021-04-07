<?php

class ProvidersController extends Controller
{
    public function index()
    {
        # Chama um Model
        $providers = new Providers();
        $data = $providers->getProviders();
        # Chama a view
        $this->loadTemplate('crud/select/providers', $data);
    }

    public function add($id = '')
    {
        # Verifica se o id é númerico
        if (!is_numeric($id)) {
            $this->loadTemplate('home');
        } else {
            # Chama um model
            $providers = new Providers();
            # Faz uma consulta no banco
            $data = $providers->getProvidersById($id);
            # Chama a view
            $this->loadTemplate('crud/add', $data);
        }
    }

    public function alter($id = '')
    {
        # Verifica se o id é númerico
        if (!is_numeric($id)) {
            $this->loadTemplate('home');
        } else {
            # Chama um model
            $providers = new Providers();
            # Faz uma consulta no banco
            $data = $providers->getProvidersById($id);
            # Chama a view
            $this->loadTemplate('crud/alter', $data);
        }
    }
}
