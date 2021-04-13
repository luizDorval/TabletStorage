<?php

class MenuController extends Controller
{
    public function index()
    {
        # Chama um Model
        # ------
        # Chama a view
        if (isset($_SESSION['id_user'])) {
            $this->loadTemplate('menu');
        } else {
            $data['quit'] = true;
            $this->loadTemplate('home', $data);
        }
    }
}
