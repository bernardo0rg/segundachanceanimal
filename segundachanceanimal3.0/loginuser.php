<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Voluntários - Segunda Chance Animal</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f5ef;
            color: #443f3f;
        }

        .container {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background-color: #ffffff;
            border: 2px solid #e4adcc;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(68, 63, 63, 0.1);
        }

        h1 {
            text-align: center;
            color: #8fbfae;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #443f3f;
        }

        input[type="cpf"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #8fbfae;
            border-radius: 8px;
            background-color: #f5f5ef;
        }

        button, input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #8fbfae;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover, input[type="submit"]:hover {
            background-color: #76a999;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 80px;
            height: auto;
        }

        a {
            display: block;
            text-align: center;
        }

        #btn-cadastro {
            background-color: #df76b1ff;
        }

        #btn-cadastro:hover {
            background-color: #cc89afff;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="logo">
            <!-- Substitua com o logo real -->
            <img src="img/logosegundachanceanimal.png" alt="Logo Segunda Chance Animal">
        </div>
        <h1>Login</h1>
        <form action="src/valida-login.php" method="POST">
            <label for="cpf">CPF:</label>
            <input type="cpf" id="cpf" name="cpf" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <!-- <button type="submit">Entrar</button> -->
            <input type="submit" value="Entrar">
            <br><br>            
        </form>
        
        <button onclick="window.location.href='cadastrar.php'" id="btn-cadastro">Criar conta</button>
        <br>
        <div class="footer">
            <span style="display: flex; justify-content: center;">Acesso administrativo: &nbsp; <a href="loginadm.php" style="color:#8fbfae; text-decoration:none;">Entrar</a></span>
      
            <p>ONG Segunda Chance Animal &copy; 2025</p>
        </div>
    </div>

</body>
</html>
