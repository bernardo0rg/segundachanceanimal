<?php
//start_session()
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição - Segunda Chance Animal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos específicos para o formulário */
        .form-container {
            width: 50%;
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #443f3f;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"],
        .form-container input[type="tel"],
        .form-container textarea,
        .form-container select {
            width: calc(100% - 20px); /* Ajusta a largura para incluir padding */
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box; /* Garante que padding e border sejam incluídos na largura total */
        }
        .form-container textarea {
            resize: vertical; /* Permite redimensionar verticalmente */
            min-height: 80px;
        }
        .form-container input[type="checkbox"] {
            margin-right: 10px;
        }
        .form-container .checkbox-group {
            margin-bottom: 20px;
            color: #443f3f;
        }
        .form-container .submit-btn {
            background-color: #8fbfae; /* Cor do botão de envio */
            color: #f5f5ef;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
            width: 100%; /* Botão ocupa a largura total */
        }
        .form-container .submit-btn:hover {
            background-color: #e4adcc; /* Cor do botão ao passar o mouse */
            color: #443f3f;
            transform: translateY(-2px);
        }
        .error-message {
            color: #d9534f; /* Uma cor de erro, se necessário no futuro com JS */
            font-size: 0.9em;
            margin-top: -15px;
            margin-bottom: 15px;
            display: block;
        }

        /* Mantendo estilos do cabeçalho e rodapé do site principal */
        header {
            background-color: #8fbfae;
            color: #f5f5ef;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        footer {
            background-color: #443f3f;
            color: #f5f5ef;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Segunda Chance Animal</h1>
        <p>Inscrição de Novos Usuários</p>
    </header>

    <div class="form-container">
        <h2 class="section-title" style="color: #e4adcc;">Junte-se à Nossa Causa!</h2>
        <p style="text-align: center; margin-bottom: 30px;">Preencha o formulário abaixo para se tornar um membro da nossa comunidade e receber novidades.</p>
        
        <form action="processa_inscricao.php" method="POST">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="seu.email@exemplo.com" required>

            <label for="senha">Criar Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Mínimo 6 caracteres" required minlength="6">

            <label for="telefone">Telefone (opcional):</label>
            <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX">

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" placeholder="Sua cidade">

            <label for="estado">Estado:</label>
            <select id="estado" name="estado">
                <option value="">Selecione seu estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>

            <label for="como_conheceu">Como nos conheceu?</label>
            <textarea id="como_conheceu" name="como_conheceu" placeholder="Nos conte um pouco..."></textarea>

            <div class="checkbox-group">
                <input type="checkbox" id="newsletter" name="newsletter" value="sim" checked>
                <label for="newsletter" style="display: inline;">Desejo receber a newsletter da Segunda Chance Animal.</label>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="termos" name="termos" value="aceito" required>
                <label for="termos" style="display: inline;">Li e aceito os <a href="#" style="color: #8fbfae; text-decoration: none;">Termos de Uso e Política de Privacidade</a>.</label>
            </div>
            
            <button type="submit" class="submit-btn">Inscrever-se</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 Segunda Chance Animal. Todos os direitos reservados.</p>
        <p>Entre em contato: contato@segundachanceanimal.org</p>
    </footer>
</body>
</html>