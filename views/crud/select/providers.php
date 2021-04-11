<div class="addContainer"><a class="add" href="<?= BASEURL ?>/Providers/add">+</a></div>
<h1 class="crudTitle">Registros</h1>
<?php foreach ($this->data as $data) :
    echo '<section class="card">';


    foreach ($data as $key => $value) :
        if (is_numeric($key)) {
            (empty($value)) ? $value = 'Não informado' : $value = $value;
            switch ($key) {
                case 0:
                    $key = 'Código:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 1:
                    # code...
                    $key = 'Nome:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 2:
                    # code...
                    $key = 'Telefone:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 3:
                    # code...
                    $key = 'Email:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 4:
                    # code...
                    $key = 'Rua:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 5:
                    # code...
                    $key = 'Número:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 6:
                    # code...
                    $key = 'Cidade:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 7:
                    # code...
                    $key = 'Estado:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 8:
                    $key = 'CEP:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                default:
                    $key = "Erro ao buscar campo";
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
            }
        }
    endforeach;
    echo '<div class="settings">
            <span><a style="text-decoration: none;" href="' . BASEURL . '/Providers/alter/' . $data['id_provider'] . '">✏️</a></span>
            <span><a style="text-decoration: none;" href="' . BASEURL . '/Providers/delete/' . $data['id_provider'] . '">❌</a></span
        </div>';
    echo '</section>';
endforeach; ?>