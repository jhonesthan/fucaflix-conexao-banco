<?php 
    $host = "localhost";
    $user = "root";
    $senha = "";
    $database = "escola2022b";

    $icon = mysqli_connect ($host, $user, $senha, $database) or die ("Erro de conexão");

    if(isset($_POST['logar'])) {
        $nome = $_POST['nome'];
        $senha1 = $_POST['senha1'];
        // $email = $_POST['email'];
        // $telefone = $_POST['telefone'];
        // $forma_de_pagamento = $_POST['forma_de_pagamento'];
        $query = mysqli_query($icon, "INSERT INTO logar (nome, senha1) VALUES('$nome', '$senha1')");

        if($query){
            echo 'Cadastro realizado com sucesso';
        }
        else {
            echo 'Erro de cadastro';
        }
}
?>

