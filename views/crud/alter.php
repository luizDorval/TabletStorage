<form style="height: 165%;display: flex;flex-direction:column; align-items:center;" action="<?= $this->url['baseurl'] ?>/save" method="POST">
    <h1 class="crudTitle">Alterar</h1>
    <div class="add card alter">
        <div class="cardInputs">
            <?php
            foreach ($this->data as $data) {
                foreach ($data as $key => $value) {
                    if (count($data) > 8) {
                        switch ($key) {
                            case 1:
                                echo '<label class="item" for="' . $key . '">Nome</label>';
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
                        echo  '<input style="color: #000;display:none;" type="text" name="' . $key . '" value="' . $value . '">';
                    } else {
                        echo '<input style="color: #000;" type="text" name="' . $key . '" value="' . $value . '">';
                    }
                }
            }
            ?>
            <input type="text" name="alter" value="true" style="display: none">
        </div>
        <div class="addButtons">
            <a href="<?= BASEURL . '/Menu' ?>">Cancelar</a>
            <button>Alterar</button>
        </div>
    </div>
</form>