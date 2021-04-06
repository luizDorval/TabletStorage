<form class="login" method="GET" action="<?php echo "http://" . $_SERVER['SERVER_NAME'] . "/qi/TabletStorage/Menu"; ?>">
    <div class="inputs">
        <input type="email" class="email" placeholder="Email">
        <input type="password" class="password" placeholder="Senha">
    </div>
    <div class="confirmButtons">
        <a class="register" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . "/qi/TabletStorage/Register"; ?>"><span>Registrar</span></a>
        <button class="signIn" type="submit">Entrar</button>
    </div>
</form>