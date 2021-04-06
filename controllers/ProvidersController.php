<?php

class ProvidersController extends Controller
{
    public function index()
    {
        # Chama um Model
        $providers = new Providers();
        $data = $providers->getProviders();
        # Chama a view
        $this->loadTemplate('providers', $data);
    }
}
