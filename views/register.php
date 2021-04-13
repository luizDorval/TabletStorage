<div class="registerContainer">
    <form class="register" method="POST" action="<?php echo BASEURL . "/Register/add"; ?>">
        <h1 style="color: var(--textPrimary); margin: -1rem 0 1rem 0;">Registrar</h1>
        <div class="inputs">
            <input type="email" class="email" placeholder="Email" name="email">
            <input type="password" class="password" placeholder="Senha" name="password">
            <input type="password" class="password" placeholder="Confirme sua senha" name="passwordConfirm">
        </div>
        <div class="confirmButtons">
            <a href="<?php echo BASEURL . "/Home"; ?>">Cancelar</a>
            <button type="submit">Criar</button>
        </div>
        <div style="color: #ff4949; position:absolute; bottom: 1%;"><?= isset($this->data['error']) ? $this->data['error'] : '' ?></div>
        <div style="color: #49ff49; position:absolute; bottom: 1%;"><?= isset($this->data['success']) ? $this->data['success'] : '' ?></div>
    </form>
</div>