<?php 

require "config.inc.php";

$corret ="";
if($_SERVER["REQUEST_METHOD"]== "POST"){
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')";

if (mysqli_query($conexao, $sql)){
    $corret= "USUARIO CADASTRADO COM SUCESSO";
}else{
    echo "Erro: " . mysqli_error($conexao);
}
}

?>

<h2>Cadastro de Usuario</h2>
<form method="post">
    Usuário: <input type="text" name="usuario" required>
    Senha: <input type="password" name="senha" required>

    <input type="submit" value="ENVIAR">

    <?php echo"<p>$corret</p>";?>
</form>