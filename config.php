<?php 
    session_start();
    $autoLoad = function($class){
        if($class == "Email"){
            include("class/PHPMailer/src/PHPMailer.php");
        }
        include('class/'. $class .'.class.php');
    };

    spl_autoload_register($autoLoad);   
    
    define("INCLUDE_PATH","http://localhost".dirname($_SERVER['PHP_SELF'])."/");

    
?>