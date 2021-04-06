<?php

class TabletsController extends Controller
{
    public function index()
    {
        # Chama um Model
        $tablets = new Tablets();
        $data = $tablets->getTablets();
        # Chama a view
        $this->loadTemplate('tablets', $data);
    }
}
