<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página com Seções</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<?php
//debian utilizar o comando sudo a2enmod rewrite  e depois sudo systemctl restart apache2
//echo $_GET['url'];
?>

<body>

    <header>
        <!-- Ícone de Ponto de Venda (SVG simples) -->
        <div class="header-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4V8h16v10zm-2-7H6v-2h12v2z" />
            </svg>
        </div>
        <h1>PDV Inovador</h1>
    </header>

    <nav>
        <button class="menu-toggle">
            &#9776; <!-- Ícone de hambúrguer -->
        </button>
        <div class="nav-links">
            <a href="home#sobre">Sobre Nós</a>
            <a href="home#servicos">Serviços</a>
            <a realtime="contato" href="contato">Contato</a>
        </div>
    </nav>
    <?php new Email()?>
   <div id="content">
     <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    if (file_exists('pages/' . $url . '.php')) {
        include('pages/' . $url . '.php');
    }else {
        //incluir pagina de erro
        include('pages/error.php');
    }

    ?>
   </div>

    <footer>
        <p>&copy; 2025 Minha Empresa. Todos os direitos reservados.</p>
    </footer>
    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>js/nav.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>js/slide.js"></script>   
    <script src="<?php echo INCLUDE_PATH ?>js/googleMap.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>js/map.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>js/noLoad.js"></script>
    <?php 
        /* if($url == 'contato'){
            echo '<script src="'.INCLUDE_PATH.'js/googleMap.js"></script>';  
            echo '<script src="'.INCLUDE_PATH.'js/map.js"></script>'; 
        } */
    ?>
  

</body>




</html>