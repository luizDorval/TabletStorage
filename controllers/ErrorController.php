<?php

class ErrorController extends Controller
{
    public function index()
    {
        # Chama um Model
        # ------
        # Chama a view
        $this->loadTemplate('error');
    }
}
