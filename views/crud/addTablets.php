<form style="height: 165%;display: flex;flex-direction:column; align-items:center;" action="<?= $this->url['baseurl'] ?>/save" method="POST">
    <h1 class="crudTitle">Adicionar</h1>
    <div class="add card">
        <div class="cardInputs">
            <label for="1">Marca:</label>
            <input type="text" name="1">
            <label for="2">Modelo:</label>
            <input type="text" name="2" required>
            <label for="3">Cor:</label>
            <input type="text" name="3">
            <label for="4">Valor:</label>
            <input type="number" min="0" name="4">
            <label for="5">Data de fabricação:</label>
            <input type="date" name="5">
            <label for="6">Data de registro no sistema:</label>
            <input type="date" name="6">
            <label for="7">Código do fornecedor:</label>
            <input type="number" min="1" name="7" required>
        </div>
        <div class="addButtons">
            <a href="<?= BASEURL . '/Tablets' ?>">Cancelar</a>
            <button type="submit">Adicionar</button>
        </div>
    </div>
</form>