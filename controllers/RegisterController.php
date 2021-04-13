<?php

class RegisterController extends Controller
{
    public function index()
    {
        # Chama um Model
        # ------
        # Chama a view
        $data['quit'] = true;
        $this->loadTemplate('register', $data);
    }

    public function add()
    {
        if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['passwordConfirm']) && !empty($_POST['passwordConfirm'])) {
            if ($_POST['password'] == $_POST['passwordConfirm']) {
                # Chama um model
                $login = new Login();
                if (!$login->validateEmail($_POST['email'])) {

                    if ($login->register($_POST['email'], $_POST['password'])) {
                        $data['success'] = 'Parabéns, você foi cadastrado com sucesso !!!';
                        $data['quit'] = true;
                        $this->loadTemplate('register', $data);
                    } else {
                        $data['error'] = 'Erro ao cadastrar, por favor tente novamente !!!';
                        $data['quit'] = true;
                        $this->loadTemplate('register', $data);
                    }
                } else {
                    $data['error'] = 'Erro ao cadastrar, email ja cadastrado !!!';
                    $data['quit'] = true;
                    $this->loadTemplate('register', $data);
                }
            } else {
                $data['error'] = 'Erro, as senhas precisam ser iguais';
                $data['quit'] = true;
                $this->loadTemplate('register', $data);
            }
        } else {
            $data['error'] = 'Erro, por favor preencha todos os campos';
            # Chama a view
            $data['quit'] = true;
            $this->loadTemplate('register', $data);
        }
    }
}
