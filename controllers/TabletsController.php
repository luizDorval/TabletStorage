<?php

class TabletsController extends Controller
{
    public function index()
    {
        # Chama um Model
        $tablets = new Tablets();
        $data = $tablets->getTablets();
        # Chama a view
        $this->loadTemplate('crud/select/tablets', $data);
    }

    public function add($id = '')
    {
        # Verifica se o id é númerico
        if (!is_numeric($id)) {
            $this->loadTemplate('home');
        } else {
            # Chama um model
            $tablets = new Tablets();
            # Faz uma consulta no banco
            $data = $tablets->getTabletsById($id);
            # Chama a view
            $this->loadTemplate('crud/app', $data);
        }
    }

    public function alter($id = '')
    {
        # Verifica se o id é númerico
        if (!is_numeric($id)) {
            $this->loadTemplate('home');
        } else {
            # Chama um model
            $tablets = new Tablets();
            # Faz uma consulta no banco
            $data = $tablets->getTabletsById($id);
            # Chama a view
            $this->loadTemplate('crud/alter', $data);
        }
    }

    public function delete($id = '')
    {
        if (!is_numeric($id)) {
            $this->loadTemplate('home');
        } else {
            # Chama a view
            $this->loadTemplate('crud/delete');
        }
    }
}
