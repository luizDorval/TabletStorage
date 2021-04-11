<div class="loginContainer">
    <form class="login" method="GET" action="<?php echo BASEURL . "/Menu"; ?>">
        <h1 style="color: var(--textPrimary); margin-bottom: 1rem;">Login</h1>
        <div class="inputs">
            <input type="email" class="email" placeholder="Email">
            <input type="password" class="password" placeholder="Senha">
        </div>
        <div class="confirmButtons">
            <a class="register" href="<?php echo BASEURL . "/Register"; ?>"><span>Registrar</span></a>
            <button class="signIn" type="submit">Entrar</button>
        </div>
    </form>
</div>