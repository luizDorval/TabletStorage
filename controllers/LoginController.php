<?php

class LoginController extends Controller
{
    public function index()
    {
        # Chama um Model
        if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $email = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);
            $login = new Login();
            if ($login->login($email, $password)) {
                if (isset($_SESSION['id_user'])) {
                    $this->loadTemplate('menu');
                } else {
                    $data['incorrect'] = true;
                    $data['quit'] = true;
                    $this->loadTemplate('home', $data);
                }
            } else {
                $data['incorrect'] = true;
                $data['quit'] = true;
                # Chama a view
                $this->loadTemplate('home', $data);
            }
        } else {
            $data['invalid'] = true;
            $data['quit'] = true;
            # Chama a view
            $this->loadTemplate('home', $data);
        }
    }

    public function quit()
    {
        session_destroy();
        $data['quit'] = true;
        $data['quit'] = true;
        $this->loadTemplate('home', $data);
    }
}
