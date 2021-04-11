<div class="registerContainer">
    <form class="register" method="GET" action="<?php echo BASEURL . "/Register"; ?>">
        <h1 style="color: var(--textPrimary); margin: -1rem 0 1rem 0;">Registrar</h1>
        <div class="inputs">
            <input type="text" class="email" placeholder="Email">
            <input type="password" class="password" placeholder="Senha">
            <input type="password" class="password" placeholder="Confirme sua senha">
        </div>
        <div class="confirmButtons">
            <a href="<?php echo BASEURL . "/Home"; ?>">Cancelar</a>
            <button type="submit">Criar</button>
        </div>
    </form>
</div>