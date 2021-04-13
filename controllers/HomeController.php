<?php

class HomeController extends Controller
{
    public function index()
    {
        $data['quit'] = true;
        # Chama a view
        $this->loadTemplate('home', $data);
    }
}
