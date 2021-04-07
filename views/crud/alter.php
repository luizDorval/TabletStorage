<form action="">
    <h1 class="crudTitle">Alterar</h1>
    <div class="alterValues">
        <div>
            <?php
            foreach ($this->data as $data) {
                foreach ($data as $key => $value) {
                    if (count($data) < 8) {
                        switch ($key) {
                            case 0:
                                echo '<label for="' . $value . '">Código</label>';
                                break;
                            case 1:
                                echo '<label for="' . $value . '">Nome</label>';
                                break;
                            case 2:
                                echo '<label for="' . $value . '">Telefone</label>';
                                break;
                            case 3:
                                echo '<label for="' . $value . '">Email</label>';
                                break;
                            case 4:
                                echo '<label for="' . $value . '">Código do endereço</label>';
                                break;
                        }
                    } else {
                        switch ($key) {
                            case 0:
                                echo '<label for="' . $value . '">Código</label>';
                                break;
                            case 1:
                                echo '<label for="' . $value . '">Marca</label>';
                                break;
                            case 2:
                                echo '<label for="' . $value . '">Modelo</label>';
                                break;
                            case 3:
                                echo '<label for="' . $value . '">Cor</label>';
                                break;
                            case 4:
                                echo '<label for="' . $value . '">Valor</label>';
                                break;
                            case 5:
                                echo '<label for="' . $value . '">Data de registro no sistema</label>';
                                break;
                            case 6:
                                echo '<label for="' . $value . '">Data de fabricação</label>';
                                break;
                            case 7:

                                echo '<label for="' . $value . '">Código do fornecedor</label>';
                                break;
                        }
                    }
                    echo '<input style="color: #000;" type="text" name="' . $value . '" value="' . $value . '">';
                }
            }
            ?>
        </div>
    </div>
    <div class="confirmButtons">
        <a href="<?= BASEURL . '/Menu' ?>">Cancelar</a>
        <button>Alterar</button>
    </div>
</form>