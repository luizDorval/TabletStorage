<form style="height: 165%;display: flex;flex-direction:column; align-items:center;" action="<?= $this->url['baseurl'] ?>/save" method="POST">
    <h1 class="crudTitle">Adicionar</h1>
    <div class="add card">
        <div class="cardInputs">
            <label for="1">Nome:</label>
            <input type="text" name="1" required>
            <label for="2">Telefone:</label>
            <input type="text" name="2">
            <label for="3">Email:</label>
            <input type="text" name="3">
            <label for="4">Rua:</label>
            <input type="number" min="0" name="4">
            <label for="5">Número:</label>
            <input type="number" name="5">
            <label for="6">Cidade:</label>
            <input type="text" name="6">
            <label for="7">Estado:</label>
            <input type="text" min="1" name="7">
            <label for="8">CEP:</label>
            <input type="text" name="8">
        </div>
        <div class="addButtons">
            <a href="<?= BASEURL . '/Providers' ?>">Cancelar</a>
            <button type="submit">Adicionar</button>
        </div>
    </div>
</form>