<?php

class homeController extends Controller
{
    public function index($parameters = null)
    {
        # Chama um Model
        # ------
        # Chama a view
        $this->loadTemplate('home');
    }
}
