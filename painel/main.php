<?php
$url = isset($_GET['url']) ? $_GET['url'] : '';
if ($url == "logout") {
    Painel::logout();
}

?>
<?php INCLUDE_PATH . $_SESSION['img']; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH . 'css/main.css' ?>">
</head>

<body>

    <!-- Barra Lateral -->
    <aside class="sidebar">
        <div class="logo">
            <h2>Dashboard</h2>
        </div>

        <div class="user-profile">
            <!-- <img src=https://placehold.co/80x80.png alt="User Photo" class="user-photo"> -->
            <img src="<?php echo INCLUDE_PATH . "uploads/img/" . $_SESSION['img']; ?>" alt="User Photo"
                class="user-photo">
            <h3><?php echo $_SESSION['nome'] . ' ' . $_SESSION['sobrenome']; ?></h3>
            <p><?php echo $_SESSION['cargo']; ?></p>
        </div>

        <nav>
            <ul>
                <li>
                    <a href="geral">
                        <i class="fas fa-home"></i>
                        Dashboard
                        <i></i>
                    </a>
                </li>
                <li class="has-submenu">
                    <a href="">
                        <i class="fas fa-plus-circle"></i>
                        Cadastro
                        <i class="fas fa-chevron-down submenu-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="cadastro_depoimento"><i class="fas fa-comment-alt"></i> Cadastro de depoimento<i></i></a></li>
                        <li><a href=""><i class="fas fa-concierge-bell"></i> Cadastro de serviço<i></i></a></li>
                        <li><a href=""><i class="fas fa-image"></i> Cadastro de slide<i></i></a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="">
                        <i class="fas fa-tasks"></i>
                        Gestão
                        <i class="fas fa-chevron-down submenu-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href=""><i class="fas fa-clipboard-list"></i> Lista de depoimentos<i></i></a></li>
                        <li><a href=""><i class="fas fa-list-ul"></i> Lista de serviços<i></i></a></li>
                        <li><a href="" class="teste"><i class="fas fa-images"></i> Lista de slides<i></i></a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="">
                        <i class="fas fa-user-cog"></i>
                        Administração do Painel
                        <i class="fas fa-chevron-down submenu-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="editar_usuario"><i class="fas fa-user-edit"></i> Editar usuários<i></i></a></li>
                        <li><a href="adicionar_usuario"><i class="fas fa-user-plus"></i> Adicionar usuário<i></i></a></li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-chart-line"></i>
                        Relatórios
                        <i></i>
                    </a>
                </li>

                <li class="menu-inferior">
                    <a href="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                        <i></i>
                    </a>
                </li>
            </ul>
        </nav>


    </aside>

    <!-- Conteúdo Principal -->
    <main class="main-content">
        <header class="navbar">
            <div class="menu-mobile">
                <i class="fa-solid fa-bars"></i>
            </div>
            <h1>Visão Geral</h1>
        </header>

        <section class="content">
            <?php
                
                $url = isset($_GET['url']) ? $_GET['url'] : 'geral';
                if (file_exists('pages/' . $url . '.php')) {
                    include('pages/' . $url . '.php');
                } else {
                    //incluir pagina de erro
                    include('pages/error.php');
                }
            ?>
        </section>
    </main>
    <script src="<?php echo INCLUDE_PATH . "../js/jquery.js"; ?>"></script>
    <script src="<?php echo INCLUDE_PATH . "js/menu.js"; ?>"></script>
</body>

</html>