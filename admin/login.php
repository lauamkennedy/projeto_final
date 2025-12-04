<?php 
session_start(); 

require "config.inc.php";

$erro ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql= "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0) {

        $_SESSION["logado"] = true;

        header("Location: index.php");
        exit;
    } else {
        $erro =  "Usuário ou senha incorretos";
    }
}
?>
<h2>Pagina de Login</h2>
<form method="post">
    Usuário: <input type="text" name="usuario" required>
    Senha: <input type="password" name="senha" required>

    <input type="submit" value="ENVIAR">

    <?php echo "<p>$erro</p>"; ?>

    <a href="../index.php">Ir para a pagina inicial</a>
</form>