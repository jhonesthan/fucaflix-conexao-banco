<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="fucaflixcategorias.css">
<div class="nav" id="nav">
        <a id="fucaflix" href="fucaflixindex.html"><h2>FUCAFLIX</h2></a> 
        <a class="links-nav" href="fucaflixlogin.html" >Login</a>
        <a class="links-nav" href="fucaflixcadastro.html">Cadastrar</a>
        <a class="links-nav" href="filmes.php">Categorias</a>
    </div>
<?php
    // include 'header.php';
    $user = "root";
    $senha = "";
?>

<div class="container mt-3">
  <h2> Catálogo Fucaflix </h2>
  <p>O melhor site de filmes da atualidade</p>            
  <table class="table table-dark">


  <thead>
        <tr>
          <th>ID</th>
          <th>NOME</th>
          <th>GENERO</th>
          <th>LANÇAMENTO</th>
        </tr>
</thead>

     <tbody>
    <?php

    try {
        $conn = new PDO("mysql:host=localhost;dbname=escola2022b", $user, $senha);  //alterar banco
        $conn->exec("set names UTF8");
        $jhone = $conn->prepare(" SELECT * FROM  categoria"); // nossa table 
        $jhone->execute();
        $escola2022b = $jhone->fetchAll();

        for($i = 0; $i < $jhone -> rowCount(); $i++) {
            echo "<tr> 
                    <td>" .$escola2022b[$i]['id']. "</td>
                    <td>" .$escola2022b[$i]['nome']. "</td>
                    <td>" .$escola2022b[$i]['genero']. "</td> 
                    <td>" .$escola2022b[$i]['data_lancamento']."</td>
                  </tr>";
        }

    } catch(PDOException $e) { 
        echo $e -> getMessage();
    }
  ?>
    </tbody>
  </table>
</div>


<?php


?>