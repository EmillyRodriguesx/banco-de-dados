<?php
echo "Sistema de Banco de Dados <br>" ;
$hostnme = "localhost";
$username = "root";
$password = "";
$dbname = "exemplo";
$conexao = mysqli_connect($hostnme,$username,$password,$dbname);

if(!$conexao){
    die(!"erro na conexão como banco de dados");
   
}

?>