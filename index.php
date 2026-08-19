<?php
include "actions.php";
$usuarios = selecionarTabela("usuarios");
if($_SERVER["REQUEST_METHOD"] =="POST"){
    if(isset($_POST ['nome'])){
        $nome = $_POST ["nome"];
        
        if ($nome != "") {
          criarUsuario($nome);
        }
    }

    header("location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</html>
    <ul>
        <?php if (mysqli_num_rows($usuarios) > 0): ?>
            <?php foreach ($usuarios as $usuario): ?>
                <li>
                    <?php echo $usuario ["nome"]; ?>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li> Nenhum usuario encontrado.
        <?php endif; ?>
    </ul>
    <form method="POST">
        <input type="texte" placeholder="Digite um nome..." name="nome">
        <button>Enviar</button>
    </form>
</body>

</html>