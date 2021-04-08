<form action="<?= $this->url['baseurl'] ?>/save/" method="POST">
    <h1 class="crudTitle">Adicionar</h1>
    <div class="values">
        <div>
            <?php
            foreach ($this->data as $data) {
                foreach ($data as $key => $value) {
                    if (count($data) > 8) {
                        switch ($key) {
                            case 1:
                                echo '<label for="' . $key . '">Nome</label>';
                                break;
                            case 2:
                                echo '<label for="' . $key . '">Telefone</label>';
                                break;
                            case 3:
                                echo '<label for="' . $key . '">Email</label>';
                                break;
                            case 4:
                                echo '<label for="' . $key . '">Código do endereço</label>';
                                break;
                            case 5:
                                echo '<label for="' . $key . '">Rua</label>';
                                break;

                            case 6:
                                echo '<label for="' . $key . '">Número</label>';
                                break;

                            case 7:
                                echo '<label for="' . $key . '">Cidade</label>';
                                break;

                            case 8:
                                echo '<label for="' . $key . '">Estado</label>';
                                break;

                            case 9:
                                echo '<label for="' . $key . '">CEP</label>';
                                break;
                        }
                    } else {
                        switch ($key) {
                            case 1:
                                echo '<label for="' . $key . '">Marca</label>';
                                break;
                            case 2:
                                echo '<label for="' . $key . '">Modelo</label>';
                                break;
                            case 3:
                                echo '<label for="' . $key . '">Cor</label>';
                                break;
                            case 4:
                                echo '<label for="' . $key . '">Valor</label>';
                                break;
                            case 5:
                                echo '<label for="' . $key . '">Data de registro no sistema</label>';
                                break;
                            case 6:
                                echo '<label for="' . $key . '">Data de fabricação</label>';
                                break;
                            case 7:
                                echo '<label for="' . $key . '">Código do fornecedor</label>';
                                break;
                        }
                    }
                    if ($key == 0) {
                        echo  '';
                    } else if ($key == 1 || $key == 2 || $key == 4 || $key == 7) {
                        echo '<input style="color: #000;" type="text" name="' . $key . '" required>';
                    } else {
                        echo '<input style="color: #000;" type="text" name="' . $key . '">';
                    }
                }
            }
            ?>
        </div>
    </div>
    <div class="confirmButtons">
        <a href="<?= BASEURL . '/Menu' ?>">Cancelar</a>
        <button type="submit">Adicionar</button>
    </div>
</form>