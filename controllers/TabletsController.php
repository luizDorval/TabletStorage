<?php

use function PHPSTORM_META\type;

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

    public function add($id = 0000000001)
    {
        # Verifica se o id é númerico
        if (!is_numeric($id)) {
            $this->loadTemplate('home');
        } else {
            # Chama um model
            $tablets = new Tablets();
            # Faz uma consulta no banco
            $data = $tablets->getTabletsById($id);
            $url['baseurl'] = BASEURL . '/Tablets';
            if (empty($data)) {
                $this->loadTemplate('error', $data);
            } else {
                # Chama a view
                $this->loadTemplate('crud/add', $data, $url);
            }
        }
    }

    public function save()
    {
        if (isset(
            $_POST['2'],
            $_POST['7'],
        )) {
            $data = [];
            $tablets = new Tablets();
            foreach ($_POST as $key => $value) :
                if ($value != '') {
                    $data[$key] = $value;
                } else {
                    $data[$key] = null;
                }
            endforeach;

            if ($tablets->add(
                $data['1'],
                $data['2'],
                $data['3'],
                $data['4'],
                $data['7'],
                $data['5'],
                $data['6']
            )) {
                $data['success'] = 'Sucesso ao inserir dados<br><a href="' . BASEURL . '/Menu" class="myLink">Voltar</a>';
                $this->loadTemplate('success', $data);
            } else {
                $data['erro'] = "Erro ao inserir dados";
                $this->loadTemplate('error', $data);
            }
        } else {
            $data['erro'] = "Erro ao inserir dados";
            $this->loadTemplate('error', $data);
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
            if (empty($data)) {
                $this->loadTemplate('error', $data);
            } else {
                # Chama a view
                $this->loadTemplate('crud/alter', $data);
            }
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
