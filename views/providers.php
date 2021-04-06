<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-Mail</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
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