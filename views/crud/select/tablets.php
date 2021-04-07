<div class="addContainer"><a class="add" href="<?= BASEURL ?>/Tablets/add">+</a></div>
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Preço</th>
            <th style="white-space: nowrap;">Data de fabricação</th>
            <th style="white-space: nowrap;">Data de registro no sistema</th>
            <th style="white-space: nowrap;">Código do Fornecedor</th>
            <th style="white-space: nowrap;">Nome do Fornecedor</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($this->data as $data) {
            echo '<tr>';
            foreach ($data as $key => $value) {
                echo '<td style="white-space: none;">';
                echo $value;
                echo '</td>';
            }
            echo '<td>';
            echo '<a style="text-decoration: none; filter: grayscale(1);" href="' . BASEURL . '/Tablets/alter/' . $data['id_tablet'] . '">✏️</a>';
            echo '</td>';
            echo '<td>';
            echo '<a style="text-decoration: none; filter: grayscale(0.25);" href="' . BASEURL . '/Tablets/delete/' . $data['id_tablet'] . '">❌</a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>