<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Segunda Chance Animal</title>
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

        .login-container {
            background-color: white;
            border: 2px solid #e4adcc;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(68, 63, 63, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .logo {
            width: 120px;
            margin-bottom: 20px;
        }

        h2 {
            color: #8fbfae;
            margin-bottom: 30px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px;
            border: 1px solid #8fbfae;
            border-radius: 8px;
            background-color: #f5f5ef;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #8fbfae;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #76a999;
        }

        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <img src="img/logosegundachanceanimal.png" alt="Logo Segunda Chance Animal" class="logo">
        <h2>Login do Usuário</h2>
        <form action="/painel-usuario" method="POST">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <div class="footer">
            &copy; 2025 Segunda Chance Animal
        </div>
    </div>

</body>
</html>
