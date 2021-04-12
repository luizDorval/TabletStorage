<?php

use function PHPSTORM_META\type;

class TabletsController extends Controller
{
    public function index()
    {
        # Chama um Model
        $tablets = new Tablets();

        if ($_GET['id_tablet']) {
            $data = $tablets->getTabletsById($_GET['id_tablet']);
        } else if ($_GET['providerName']) {
            $data = $tablets->getTabletsByProviderName($_GET['providerName']);
        } else {
            $data = $tablets->getTablets();
        }
        # Chama a view
        $this->loadTemplate('crud/select/tablets', $data);
    }

    public function add()
    {
        # Chama um model
        $tablets = new Tablets();
        # Faz uma consulta no banco
        $data = $tablets->getTablets();
        $url['baseurl'] = BASEURL . '/Tablets';

        # Chama a view
        $this->loadTemplate('crud/addTablets', $data, $url);
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

            if (!$_POST['alter']) {
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
                    $data['error'] = "Erro ao inserir dados";
                    $this->loadTemplate('error', $data);
                }
            } else {
                if ($tablets->alter(
                    $data['0'],
                    $data['1'],
                    $data['2'],
                    $data['3'],
                    $data['4'],
                    $data['7'],
                    $data['5'],
                    $data['6'],
                    $data['7']
                )) {
                    $data['success'] = 'Sucesso ao inserir dados<br><a href="' . BASEURL . '/Menu" class="myLink">Voltar</a>';
                    $this->loadTemplate('success', $data);
                } else {
                    $data['error'] = "Erro ao inserir dados";
                    $this->loadTemplate('error', $data);
                }
            }
        } else {
            $data['error'] = "Dados Inválidos, caso não exista um fornecedor cadastro por favor cadastre";
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
            $url['baseurl'] = BASEURL . '/Tablets';
            if (empty($data)) {
                $this->loadTemplate('error', $data, $url);
            } else {
                # Chama a view
                $this->loadTemplate('crud/alter', $data, $url);
            }
        }
    }

    public function delete($id = '')
    {
        if (!is_numeric($id)) {
            $this->loadTemplate('home');
        } else {
            # Chama um model
            $tablets = new Tablets();
            $data = $tablets->delete($id);

            if ($data) {
                $confirm['success'] = "Registro $id excluido com sucesso";
                $this->loadTemplate('success', $confirm);
            } else {
                $confirm['error'] = "Erro ao excluir o registro $id";
                $this->loadTemplate('error', $confirm);
            }
            # Chama a view
        }
    }
}
