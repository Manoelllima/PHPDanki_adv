
<?php
    $sql = MysqlPHP::conect()->prepare("SELECT FROM `tb.painel_admin` INSERT TO VALUES(NUll,?,?,?)");

?>
<div class="cadastro_usuario_container">
    <h2>Criar Conta</h2>
    <form id="" method="post">
        <div class="cadastro_usuario_name-group">
            <div class="cadastro_usuario_form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
            </div>
            <div class="cadastro_usuario_form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" id="sobrenome" name="sobrenome" placeholder="Seu sobrenome" required>
            </div>
        </div>

        <div class="cadastro_usuario_form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="seu.email@exemplo.com" required>
        </div>

        <div class="cadastro_usuario_form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="••••••••" required>
        </div>

        <div class="cadastro_usuario_form-group">
            <label for="cargo">Cargo</label>
            <input type="text" id="cargo" name="cargo" placeholder="Ex: Desenvolvedor, Gerente" required>
        </div>

        <button type="submit" name="acao">Cadastrar</button>
    </form>
</div>