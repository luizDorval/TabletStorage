<?php

class SuccessController extends Controller
{
    public function index()
    {
        # Chama um Model
        # ------
        # Chama a view
        $this->loadTemplate('success');
    }
}
