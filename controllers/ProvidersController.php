<?php

class ProvidersController extends Controller
{
    public function index()
    {
        # Chama um Model
        $providers = new Providers();
        if ($_GET['id_provider']) {
            $data = $providers->getProvidersById($_GET['id_provider']);
        } else if ($_GET['providerName']) {
            $data = $providers->getProvidersByProviderName($_GET['providerName']);
        } else {
            $data = $providers->getProviders();
        }

        # Chama a view
        if (isset($_SESSION['id_user'])) {
            $this->loadTemplate('crud/select/providers', $data);
        } else {
            $data['quit'] = true;
            $this->loadTemplate('home', $data);
        }
    }

    public function add()
    {
        if (isset($_SESSION['id_user'])) {
            # Verifica se o id é númerico
            # Chama um model
            $providers = new Providers();
            # Faz uma consulta no banco
            $data = $providers->getProviders();
            $url['baseurl'] = BASEURL . '/Providers';

            # Chama a view
            $this->loadTemplate('crud/addProviders', $data, $url);
        } else {
            $data['quit'] = true;
            $this->loadTemplate('home', $data);
        }
    }

    public function save()
    {
        if (isset($_SESSION['id_user'])) {
            if (isset(
                $_POST['1'],
                $_POST['4'],
            )) {
                $data = [];
                $providers = new Providers();
                foreach ($_POST as $key => $value) :
                    if ($value != '') {
                        $data[$key] = $value;
                    } else {
                        $data[$key] = null;
                    }
                endforeach;
                if (!$_POST['alter']) {
                    if ($providers->add(
                        $data['1'],
                        $data['2'],
                        $data['3'],
                        $data['4'],
                        $data['5'],
                        $data['6'],
                        $data['7'],
                        $data['8'],
                        $data['9']
                    )) {
                        $data['success'] = 'Sucesso ao inserir dados<br><a href="' . BASEURL . '/Menu" class="myLink">Voltar</a>';
                        $this->loadTemplate('success', $data);
                    } else {
                        $data['erro'] = "Erro ao inserir dados";
                        $this->loadTemplate('error', $data);
                    }
                } else {
                    if ($providers->alter(
                        $data['0'],
                        $data['1'],
                        $data['2'],
                        $data['3'],
                        $data['4'],
                        $data['5'],
                        $data['6'],
                        $data['7'],
                        $data['8'],
                        $data['9']
                    )) {
                        $data['success'] = 'Sucesso ao inserir dados<br><a href="' . BASEURL . '/Menu" class="myLink">Voltar</a>';
                        $this->loadTemplate('success', $data);
                    } else {
                        $data['erro'] = "Erro ao inserir dados";
                        $this->loadTemplate('error', $data);
                    }
                }
            } else {
                $data['erro'] = "Erro ao inserir dados";
                $this->loadTemplate('error', $data);
            }
        } else {
            $data['quit'] = true;
            $this->loadTemplate('home', $data);
        }
    }
    public function alter($id = '')
    {
        if (isset($_SESSION['id_user'])) {
            # Verifica se o id é númerico
            if (!is_numeric($id)) {
                $data['quit'] = true;
                $this->loadTemplate('home', $data);
            } else {
                # Chama um model
                $providers = new Providers();
                # Faz uma consulta no banco
                $data = $providers->getProvidersById($id);
                $url['baseurl'] = BASEURL . '/Providers';
                if (empty($data)) {
                    $this->loadTemplate('error', $data, $url);
                } else {
                    # Chama a view
                    $this->loadTemplate('crud/alter', $data, $url);
                }
            }
        } else {
            $data['quit'] = true;
            $this->loadTemplate('home', $data);
        }
    }

    public function delete($id = '')
    {
        if (isset($_SESSION['id_user'])) {
            if (!is_numeric($id)) {
                $data['quit'] = true;
                $this->loadTemplate('home', $data);
            } else {
                # Chama um model
                $providers = new Providers();
                $data = $providers->delete($id);

                if ($data) {
                    $confirm['success'] = "Registro $id excluido com sucesso";
                    $this->loadTemplate('success', $confirm);
                } else {
                    $confirm['error'] = "Erro ao excluir o registro $id";
                    $this->loadTemplate('error', $confirm);
                }
            }
        } else {
            $data['quit'] = true;
            $this->loadTemplate('home', $data);
        }
    }
}
