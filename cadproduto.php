<?php
include "conexao.php";
/*variável php tem que começar com $ recebe a variavel do formulário*/
$descricao = $_POST['descricao'];
$qtd = $_POST['qtd'];
$preco = $_POST['preco'];
$sql = "insert into produto values (null, '".$descricao."', '".$qtd."', '".$preco."')";

if(mysqli_query($conexao, $sql)) {
        echo "Gravado com sucesso!";
    }else{
        echo "Erro ao gravar!";
}
mysqli_close($conexao);
?>
<br>
