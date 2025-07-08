<?php
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição de Voluntários - Segunda Chance Animal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos específicos para o formulário de voluntários */
        .form-container {
            width: 70%; /* Um pouco mais largo para acomodar mais campos */
            max-width: 800px;
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
        .form-container input[type="tel"],
        .form-container input[type="date"],
        .form-container textarea,
        .form-container select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
        }
        .form-container input[type="checkbox"],
        .form-container input[type="radio"] {
            margin-right: 10px;
        }
        .form-container textarea {
            resize: vertical;
            min-height: 100px;
        }
        .form-container .checkbox-group,
        .form-container .radio-group {
            margin-bottom: 20px;
            color: #443f3f;
        }
        .form-container .radio-group label {
            display: inline-block;
            margin-right: 20px;
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
            width: 100%;
        }
        .form-container .submit-btn:hover {
            background-color: #e4adcc; /* Cor do botão ao passar o mouse */
            color: #443f3f;
            transform: translateY(-2px);
        }
        .form-group-inline {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .form-group-inline > div {
            flex: 1;
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

        /* Responsividade para o formulário */
        @media (max-width: 768px) {
            .form-container {
                width: 95%;
                padding: 15px;
            }
            .form-group-inline {
                flex-direction: column; /* Colunas viram linhas em telas menores */
                gap: 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Segunda Chance Animal</h1>
        <p>Inscrição para Voluntários</p>
    </header>

    <div class="form-container">
        <h2 class="section-title" style="color: #e4adcc;">Seja um Voluntário e Faça a Diferença!</h2>
        <p style="text-align: center; margin-bottom: 30px;">Sua ajuda é essencial para a nossa missão. Preencha o formulário abaixo e faremos contato em breve.</p>
        
        <form action="processa_voluntario.php" method="POST">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>

            <div class="form-group-inline">
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="seu.email@exemplo.com" required>
                </div>
                <div>
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" required>
                </div>
            </div>

            <div class="form-group-inline">
                <div>
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" required>
                </div>
                <div>
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" placeholder="Sua cidade" required>
                </div>
            </div>

            <label for="estado">Estado:</label>
            <select id="estado" name="estado" required>
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

            <label>Qual sua principal área de interesse para voluntariado?</label>
            <div class="checkbox-group">
                <input type="checkbox" id="cuidado_animais" name="interesses[]" value="cuidado_animais">
                <label for="cuidado_animais" style="display: inline;">Cuidado direto com animais (alimentar, limpar, passear)</label><br>
                <input type="checkbox" id="eventos" name="interesses[]" value="eventos">
                <label for="eventos" style="display: inline;">Organização de eventos e feiras de adoção</label><br>
                <input type="checkbox" id="marketing" name="interesses[]" value="marketing">
                <label for="marketing" style="display: inline;">Marketing e mídias sociais</label><br>
                <input type="checkbox" id="captacao_fundos" name="interesses[]" value="captacao_fundos">
                <label for="captacao_fundos" style="display: inline;">Captação de fundos e doações</label><br>
                <input type="checkbox" id="transporte" name="interesses[]" value="transporte">
                <label for="transporte" style="display: inline;">Transporte de animais</label><br>
                <input type="checkbox" id="outros_interesses" name="interesses[]" value="outros">
                <label for="outros_interesses" style="display: inline;">Outros (especificar abaixo)</label>
            </div>

            <label for="experiencia">Você tem alguma experiência prévia com voluntariado ou animais?</label>
            <textarea id="experiencia" name="experiencia" placeholder="Descreva brevemente sua experiência..."></textarea>

            <label>Qual sua disponibilidade semanal aproximada?</label>
            <div class="radio-group">
                <input type="radio" id="disponibilidade_1_3" name="disponibilidade" value="1-3h" required>
                <label for="disponibilidade_1_3">1-3 horas</label>
                <input type="radio" id="disponibilidade_4_8" name="disponibilidade" value="4-8h">
                <label for="disponibilidade_4_8">4-8 horas</label>
                <input type="radio" id="disponibilidade_mais_8" name="disponibilidade" value="8h+">
                <label for="disponibilidade_mais_8">Mais de 8 horas</label>
            </div>

            <label for="periodo_preferencia">Período de preferência (manhã, tarde, noite, fins de semana):</label>
            <input type="text" id="periodo_preferencia" name="periodo_preferencia" placeholder="Ex: Manhã e fins de semana">

            <label for="mensagem_adicional">Algo mais que gostaria de nos dizer?</label>
            <textarea id="mensagem_adicional" name="mensagem_adicional" placeholder="Espaço para informações adicionais..."></textarea>

            <div class="checkbox-group">
                <input type="checkbox" id="termos_voluntario" name="termos_voluntario" value="aceito" required>
                <label for="termos_voluntario" style="display: inline;">Li e concordo com os <a href="#" style="color: #8fbfae; text-decoration: none;">Termos de Voluntariado</a> da Segunda Chance Animal.</label>
            </div>
            
            <button type="submit" class="submit-btn">Enviar Inscrição de Voluntário</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 Segunda Chance Animal. Todos os direitos reservados.</p>
        <p>Entre em contato: contato@segundachanceanimal.org</p>
    </footer>
</body>
</html>