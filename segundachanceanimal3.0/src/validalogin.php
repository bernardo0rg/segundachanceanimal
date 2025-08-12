<?php
// Inicia a sessão. É necessário para armazenar informações do usuário logado.
session_start();

// 1. Configuração da Conexão com o Banco de Dados
// ATENÇÃO: Use as mesmas credenciais que você usou para o script de cadastro.
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "segunda_chance_animal2";

$conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// 2. Receber e Tratar os Dados do Formulário de Login
$cpf = $_POST['cpf'];
$senha_digitada = $_POST['senha'];

// 3. Consultar o Banco de Dados para verificar o usuário
// Usamos Prepared Statements para evitar SQL Injection
$sql = "SELECT id, nome, senha, voluntario FROM usuarios WHERE cpf = ?";
$stmt = $conexao->prepare($sql);

if ($stmt === false) {
    die("Erro na preparação da consulta: " . $conexao->error);
}

// Vincula o CPF à consulta
$stmt->bind_param("s", $cpf);
$stmt->execute();

// Obtém o resultado da consulta
$resultado = $stmt->get_result();

// 4. Verificar se o usuário existe e se a senha está correta
if ($resultado->num_rows > 0) {
    // Se encontrou um usuário com o CPF
    $usuario = $resultado->fetch_assoc();
    $senha_hash_banco = $usuario['senha'];

    // A função password_verify() compara a senha digitada com a senha criptografada do banco
    if (password_verify($senha_digitada, $senha_hash_banco)) {
        // Login bem-sucedido!
        // Armazena dados do usuário na sessão para usar em outras páginas
        $_SESSION['id_usuario'] = $usuario['id'];
        $_SESSION['nome_usuario'] = $usuario['nome'];
        $_SESSION['voluntario'] = $usuario['voluntario']; // 'sim' ou 'nao'

        // Redireciona o usuário para a página principal (por exemplo, index.php)
        echo "Login bem-sucedido! Redirecionando...";
        header("Location: ../index.php"); // Ajuste o caminho conforme a estrutura do seu projeto
        exit();

    } else {
        // Senha incorreta
        echo "Senha incorreta. Por favor, tente novamente.";
    }

} else {
    // Usuário não encontrado
    echo "CPF não encontrado. Verifique os dados ou crie uma conta.";
}

// Fecha a conexão
// window.location.href='administracao.php'//
            
// 'cadastraranimais.php'//                                 
$stmt->close();
$conexao->close();
?>

