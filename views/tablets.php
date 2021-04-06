<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Preço</th>
            <th>Fornecedor</th>
            <th>Data de fabricação</th>
            <th>Data de registro no sistema</th>
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
            echo '</tr>';
        }
        ?>
    </tbody>
</table>