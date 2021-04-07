<div class="addContainer"><a class="add" href="">+</a></div>
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th style="white-space: nowrap;">Código do Endereço</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($this->data as $data) {
            echo '<tr>';
            foreach ($data as $key => $value) {
                echo '<td>';
                echo $value;
                echo '</td>';
            }
            echo '<td>';
            echo '<a style="text-decoration: none; filter: grayscale(1);" href="' . BASEURL . '/Providers/alter/' . $data['id_provider'] . '">✏️</a>';
            echo '</td>';
            echo '<td>';
            echo '<a style="text-decoration: none; filter: grayscale(0.25);" href="' . BASEURL . '/Providers/delete/' . $data['id_provider'] . '">❌</a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>