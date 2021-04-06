<?php

class AddressesController extends Controller
{
    public function index()
    {
        # Chama um Model
        $addresses = new Addresses();
        $data = $addresses->getAdresses();
        # Chama a view
        $this->loadTemplate('addresses', $data);
    }
}
