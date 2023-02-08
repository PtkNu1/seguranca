<?php
    include('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    // criptografia hash
    $scodif = base64_encode($senha);
    $sql = "select * from fornecedor where email='$email' and senha='$scodif'";
    $resultado = mysqli_query($conexao, $sql);
    $total     = mysqli_num_rows($resultado);
    if ( $total>0 ) {
	    $dados = mysqli_fetch_array($resultado);
	    echo "Logado";
    } else {
	    echo "Não logado";
    }
?>