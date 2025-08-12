<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta - Segunda Chance Animal</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f5ef;
            color: #443f3f;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .register-container {
            background-color: #fff;
            border: 2px solid #e4adcc;
            border-radius: 12px;
            padding: 40px 30px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 0 20px rgba(68, 63, 63, 0.1);
        }

        h2 {
            text-align: center;
            color: #8fbfae;
            margin-bottom: 25px;
        }

        /* Corrigido: Estilo para a tag label padrão */
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #8fbfae;
            border-radius: 8px;
            background-color: #f5f5ef;
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #8fbfae;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #76a999;
        }

        .footer {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
            color: #777;
        }

        /* Corrigido: CSS para alinhar o checkbox */
        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }
        
        /* Corrigido: Ajuste para o checkbox não ocupar 100% da largura */
        .checkbox-group input[type="checkbox"] {
            width: auto;
            margin: 0;
            padding: 0;
        }
        
        /* Corrigido: Ajuste para o label do checkbox */
        .checkbox-group label {
            display: flex; /* Garante que o texto e o checkbox fiquem juntos */
            align-items: center;
            margin: 0; /* Remove a margem padrão para não quebrar o layout */
            font-weight: normal; /* Deixa o texto do checkbox com peso normal */
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Crie sua Conta</h2>
        <form action="src/cadastrobd.php" method="POST">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="seu@email.com" required>

            <label for="cpf">CPF</label>
            <input type="cpf" id="cpf" name="cpf" placeholder="Seu cpf" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required>

            <label for="confirmar">Confirmar Senha</label>
            <input type="password" id="confirmar" name="confirmar" placeholder="Confirme a senha" required>

            <div class="checkbox-group">
                <input type="checkbox" id="voluntario" name="voluntario" value="sim">
                <label for="voluntario">Desejo ser um voluntário ❤️</label>
            </div>

            <button type="submit">Cadastrar</button>
        </form>
        <div class="footer">
            Já tem uma conta? <a href="loginuser.php" style="color:#8fbfae; text-decoration:none;">Entrar</a>
        </div>
    </div>

</body>
</html>