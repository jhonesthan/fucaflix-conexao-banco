<?php 
    $host = "localhost";
    $user = "root";
    $senha = "";
    $database = "escola2022b";

    $icon = mysqli_connect ($host, $user, $senha, $database) or die ("Erro de conexão");

    if(isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        // $telefone = $_POST['telefone'];
        // $forma_de_pagamento = $_POST['forma_de_pagamento'];
        $query = mysqli_query($icon, "INSERT INTO cadastro (nome, cpf, email) VALUES('$nome', '$cpf', 'email')");

        if($query){
            echo 'Cadastro realizado com sucesso';
        }
        else {
            echo 'Erro de cadastro';
        }
}
?>

