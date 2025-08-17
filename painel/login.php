<?php
$sql = MysqlPHP::conect()->prepare("SELECT * FROM `tb.painel_admin` WHERE user=? AND password=?");
$erro = false;  
if (isset($_POST['acao'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $sql->execute(array($user, $password));
    $result = $sql->fetchAll();
    
    foreach ($result as $row) {
            $_SESSION["nome"] = $row['nome'];
            $_SESSION["sobrenome"] = $row['sobrenome'];
            $_SESSION["password"] = $password;
            $_SESSION["img"] = $row["img"];
            $_SESSION["cargo"] = $row["cargo"];
    }
    if ($sql->rowCount() == 1) {
        $_SESSION["login"] = true;        
        exit(header("Location: " . INCLUDE_PATH));
    } else {
        $erro = true;
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css/style.css" />
</head>


<body>

    <div class="login-container">

        <div class="login-header">
            <h2>Bem-vindo</h2>
            <p>Faça login para continuar</p>
            <?php if($erro) echo "<div class='error-alert'>
                                    <span class='icon'>&#9888;</span>
                                    <p>Usuário ou senha inválidos.</p>
                                    <p>Por favor, tente novamente.</p>
                                </div>";
            ?>
        </div>


        <form method="post">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="user" placeholder="seuemail@exemplo.com" required>
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Sua senha" required>
            </div>

            <div class="options-group">
                <label class="remember-me">
                    <input type="checkbox">
                    <span>Lembrar-me</span>
                </label>
                <a href="#" class="forgot-password">
                    Esqueceu a senha?
                </a>
            </div>

            <button type="submit" name="acao" class="btn">
                Entrar
            </button>
        </form>
    </div>

</body>

</html>