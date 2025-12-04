<?php 
require "config.inc.php"; 
echo "<h2>Veiculos Cadastrados</h2>"; 
?> 
<?php $sql = "SELECT * FROM veiculos"; 
$resultado = mysqli_query($conexao, $sql); 
if (mysqli_num_rows($resultado)>0){ 
    while($dados = mysqli_fetch_array($resultado)){ 
        echo "<hr>"; 
        echo " | Marca: ".$dados['marca'];
        echo " | Modelo: ".$dados['modelo']; 
        echo " | Ano: ".$dados['ano']; 
        echo " | Placa: ".$dados['placa'];
        echo " |Cadastrador: ".$dados['cadastrador'];
        echo " | <a href='?pg=excluir-veiculo&id=$dados[id]'>Excluir</a>"; 
        echo "<hr>";
        }  
}else{ 
    echo "<h3>Nenhum veiculo cadastrado!</h3>";
} 
mysqli_close($conexao); 
?> 
<a href="index.php">Voltar para Inicio</a>