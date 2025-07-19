<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Adoção - Segunda Chance Animal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos específicos para o formulário de adoção */
        .form-container {
            width: 75%; /* Mais largo para acomodar mais perguntas */
            max-width: 900px;
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
            width: calc(100% - 20px); /* Ajusta a largura para incluir padding */
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box; /* Garante que padding e border sejam incluídos na largura total */
        }
        .form-container input[type="radio"],
        .form-container input[type="checkbox"] {
            margin-right: 10px;
        }
        .form-container textarea {
            resize: vertical; /* Permite redimensionar verticalmente */
            min-height: 100px;
        }
        .form-group-inline {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap; /* Permite quebrar linha em telas menores */
        }
        .form-group-inline > div {
            flex: 1;
            min-width: 280px; /* Garante que os campos não fiquem muito pequenos */
        }
        .form-group-full {
            margin-bottom: 20px;
        }
        .form-group-full .radio-group label,
        .form-group-full .checkbox-group label {
            display: inline-block;
            margin-right: 20px;
        }
        .submit-btn {
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
            margin-top: 20px;
        }
        .submit-btn:hover {
            background-color: #e4adcc; /* Cor do botão ao passar o mouse */
            color: #443f3f;
            transform: translateY(-2px);
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
            .form-group-inline > div {
                min-width: unset; /* Remove min-width para melhor adaptação */
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Segunda Chance Animal</h1>
        <p>Formulário de Adoção</p>
    </header>

    <div class="form-container">
        <h2 class="section-title" style="color: #e4adcc;">Quase lá! Preencha para Adotar</h2>
        <p style="text-align: center; margin-bottom: 30px;">Para garantir que nossos animais encontrem um lar perfeito, pedimos que preencha este formulário detalhado. Todas as informações são confidenciais.</p>
        
        <form action="processa_adocao.php" method="POST">
            <label for="animal_nome">Você está se candidatando para adotar qual animal?</label>
            <input type="text" id="animal_nome" name="animal_nome" placeholder="Ex: Nome do Animal 1 (ou 'Qualquer animal')" required>

            <h3 class="section-title" style="font-size: 1.5em; margin-top: 30px; color: #8fbfae;">Seus Dados Pessoais</h3>
            <div class="form-group-inline">
                <div>
                    <label for="nome_completo">Nome Completo:</label>
                    <input type="text" id="nome_completo" name="nome_completo" placeholder="Seu nome completo" required>
                </div>
                <div>
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Formato: 000.000.000-00">
                </div>
            </div>

            <div class="form-group-inline">
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="seu.email@exemplo.com" required>
                </div>
                <div>
                    <label for="telefone">Telefone Principal:</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" required>
                </div>
            </div>

            <div class="form-group-inline">
                <div>
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" required>
                </div>
                <div>
                    <label for="profissao">Profissão:</label>
                    <input type="text" id="profissao" name="profissao" placeholder="Sua profissão">
                </div>
            </div>

            <h3 class="section-title" style="font-size: 1.5em; margin-top: 30px; color: #8fbfae;">Informações sobre sua Residência</h3>
            <label for="tipo_residencia">Tipo de Residência:</label>
            <select id="tipo_residencia" name="tipo_residencia" required>
                <option value="">Selecione</option>
                <option value="casa_com_quintal">Casa com quintal</option>
                <option value="casa_sem_quintal">Casa sem quintal</option>
                <option value="apartamento">Apartamento</option>
                <option value="sitio_fazenda">Sítio/Fazenda</option>
                <option value="outro">Outro (especificar abaixo)</option>
            </select>

            <label for="possui_cercado">A residência possui muros/cercas seguros para animais?</label>
            <div class="form-group-full radio-group">
                <input type="radio" id="cercado_sim" name="possui_cercado" value="sim" required>
                <label for="cercado_sim">Sim</label>
                <input type="radio" id="cercado_nao" name="possui_cercado" value="não">
                <label for="cercado_nao">Não</label>
                <input type="radio" id="cercado_nao_aplicavel" name="possui_cercado" value="nao_aplicavel">
                <label for="cercado_nao_aplicavel">Não se aplica (apartamento)</label>
            </div>

            <label for="moradores">Quantas pessoas moram na residência?</label>
            <input type="number" id="moradores" name="moradores" min="1" placeholder="Número de pessoas" required>

            <label>Existem crianças na residência? Se sim, quais idades?</label>
            <textarea id="criancas_idades" name="criancas_idades" placeholder="Idades das crianças, se houver. Ex: 2 anos, 5 anos."></textarea>

            <label>Todos os moradores concordam com a adoção?</label>
            <div class="form-group-full radio-group">
                <input type="radio" id="concordam_sim" name="concordam_moradores" value="sim" required>
                <label for="concordam_sim">Sim</label>
                <input type="radio" id="concordam_nao" name="concordam_moradores" value="não">
                <label for="concordam_nao">Não</label>
            </div>

            <h3 class="section-title" style="font-size: 1.5em; margin-top: 30px; color: #8fbfae;">Histórico com Animais</h3>
            <label>Você já teve animais de estimação antes?</label>
            <div class="form-group-full radio-group">
                <input type="radio" id="hist_sim" name="hist_animais" value="sim" required>
                <label for="hist_sim">Sim</label>
                <input type="radio" id="hist_nao" name="hist_animais" value="não">
                <label for="hist_nao">Não</label>
            </div>

            <label for="animais_atuais">Você possui outros animais atualmente? Se sim, quais e se são castrados/vacinados:</label>
            <textarea id="animais_atuais" name="animais_atuais" placeholder="Ex: 1 cachorro (vira-lata, 5 anos, castrado, vacinado), 2 gatos (ambos castrados, vacinados)."></textarea>

            <label for="experiencia_animais">Qual sua experiência em cuidar de animais?</label>
            <textarea id="experiencia_animais" name="experiencia_animais" placeholder="Conte-nos sobre sua experiência..."></textarea>

            <h3 class="section-title" style="font-size: 1.5em; margin-top: 30px; color: #8fbfae;">Compromisso com a Adoção</h3>
            <label>Você está ciente de que um animal de estimação requer:</label>
            <div class="form-group-full checkbox-group">
                <input type="checkbox" id="compromisso_alimentacao" name="compromissos[]" value="alimentacao" required>
                <label for="compromisso_alimentacao" style="display: inline;">Alimentação adequada e constante</label><br>
                <input type="checkbox" id="compromisso_veterinario" name="compromissos[]" value="veterinario" required>
                <label for="compromisso_veterinario" style="display: inline;">Cuidados veterinários regulares (vacinas, vermifugação, consultas)</label><br>
                <input type="checkbox" id="compromisso_exercicio" name="compromissos[]" value="exercicio" required>
                <label for="compromisso_exercicio" style="display: inline;">Exercícios e atividades físicas diárias</label><br>
                <input type="checkbox" id="compromisso_carinho" name="compromissos[]" value="carinho" required>
                <label for="compromisso_carinho" style="display: inline;">Muito amor, paciência e atenção</label><br>
                <input type="checkbox" id="compromisso_seguranca" name="compromissos[]" value="seguranca" required>
                <label for="compromisso_seguranca" style="display: inline;">Ambiente seguro e protegido</label>
            </div>

            <label for="motivo_adocao">Por que você deseja adotar um animal neste momento?</label>
            <textarea id="motivo_adocao" name="motivo_adocao" placeholder="Nos conte o motivo de sua adoção..." required></textarea>

            <label for="observacoes">Algo mais que gostaria de adicionar?</label>
            <textarea id="observacoes" name="observacoes" placeholder="Observações adicionais ou perguntas..."></textarea>

            <div class="form-group-full checkbox-group">
                <input type="checkbox" id="termos_adocao" name="termos_adocao" value="aceito" required>
                <label for="termos_adocao" style="display: inline;">Li e concordo com os <a href="#" style="color: #8fbfae; text-decoration: none;">Termos e Condições de Adoção</a> da Segunda Chance Animal.</label>
            </div>
            
            <button type="submit" class="submit-btn">Enviar Formulário de Adoção</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 Segunda Chance Animal. Todos os direitos reservados.</p>
        <p>Entre em contato: contato@segundachanceanimal.org</p>
    </footer>
</body>
</html>