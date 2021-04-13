<div class="loginContainer">
    <form style="position: relative;" class="login" method="POST" action="<?php echo BASEURL . "/Login"; ?>">
        <h1 style="color: var(--textPrimary); margin-bottom: 1rem;">Login</h1>
        <div class="inputs">
            <input type="email" class="email" placeholder="Email" name='email'>
            <input type="password" class="password" placeholder="Senha" name="password">
        </div>
        <div class="confirmButtons">
            <a class="register" href="<?php echo BASEURL . "/Register"; ?>"><span>Registrar</span></a>
            <button class="signIn" type="submit">Entrar</button>
        </div>
        <div style="color: #ff4949; position:absolute; bottom: 1%;"><?= isset($this->data['invalid']) ? 'Erro, email ou senha inválidos' : '' ?></div>
        <div style="color: #ff4949; position:absolute; bottom: 1%;"><?= isset($this->data['incorrect']) ? 'Erro, email ou senha incorretos' : '' ?></div>
    </form>
</div>