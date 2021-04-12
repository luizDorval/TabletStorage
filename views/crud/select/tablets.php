<div class="addContainer"><a class="add" href="<?= BASEURL ?>/Tablets/add">+</a></div>
<h1 class="crudTitle">Registros</h1>

<form action="<?= BASEURL ?>/Tablets/index" class="searchButtons">
    <input type="text" class="" placeholder="Código" name="id_tablet">
    <input type="text" placeholder="Nome De Fornecedor" name="providerName">
    <button>Procurar</button>
</form>
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
                    $key = 'Marca:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 2:
                    # code...
                    $key = 'Modelo:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 3:
                    # code...
                    $key = 'Cor:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 4:
                    # code...
                    $key = 'Valor:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 5:
                    # code...
                    $key = 'Data de fabricação:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 6:
                    # code...
                    $key = 'Data de registro no sistema:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 7:
                    # code...
                    $key = 'Código do fornecedor:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                case 8:
                    $key = 'Nome do fornecedor:';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
                default:
                    $key = 'Erro';
                    echo '<span class="item">' . $key . '<br><sub>' . $value . '</sub></span>';
                    break;
            }
        }
    endforeach;
    echo '<div class="settings">
            <span><a style="text-decoration: none;" href="' . BASEURL . '/Tablets/alter/' . $data['id_tablet'] . '">✏️</a></span>
            <span><a style="text-decoration: none;" href="' . BASEURL . '/Tablets/delete/' . $data['id_tablet'] . '">❌</a></span
        </div>';
    echo '</section>';
endforeach; ?>