<?php 
    include("../../pass.php");
    use acess\Acess as acess;
    class MysqlPHP{
        private static $pdo;
        public static function conect(){
                try {
                    if(isset(self::$pdo)){
                        return self::$pdo;
                    }else{
                        self::$pdo = new PDO("mysql:hostname=localhost;dbname=".acess::$DBNAME,acess::$USER,acess::$PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    }
                }catch(Exception $e){ 
                    echo "erro ao acessar banco de dados";
            
                }
            return self::$pdo;
        }
    }


?>