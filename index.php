<?php
echo "Sistema de Banco de Dados";
$hostnme = "localhost";
$username = "root";
$password = "";
$dbname = "exemplos";
$conexao = mysqli_connect($hostnme,$username,$password,$dbname);

if(!$conexao){
    die(!"erro na conexão como banco de dados");
}

$sql = "SELECT * FROM `usuarios`";
$resultado = mysqli_query($conexao,$sql);
foreach($resultados as $usuarios) {
echo $usuario ['nome'] . "<br>";
}
?>