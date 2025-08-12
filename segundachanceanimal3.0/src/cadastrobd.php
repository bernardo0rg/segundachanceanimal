<?php

if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    if(isset($_POST["voluntario"])) {
        $voluntario = $_POST["voluntario"];
    } else {
        $voluntario = "nao";
    }

    $senhaHash = hash('sha256', $senha);

    require_once "database/Database.php";

    $bd = new Database();

    $sql = "INSERT INTO usuario (nome, email, cpf, senha, tipo)
            VALUES ('$nome', '$email', '$cpf', '$senhaHash', '$voluntario' )";

    $result = $bd->insert($sql);

    if($result) {
        echo "<script>
                alert('Cadastro realizado com sucesso! ✅')
                window.location.href='../loginuser.php'
            </script>";
    } else {
        echo "<script>
                alert('Ocorreu algum erro... ☹️')
                window.location.href='../cadastrar.php'
            </script>";
    }

}