<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação - Segunda Chance Animal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos específicos para o formulário de doação */
        .form-container {
            width: 60%; /* Adaptação da largura para o formulário de doação */
            max-width: 700px;
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
        .form-container input[type="number"],
        .form-container select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
        }
        .donation-options {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
            justify-content: center;
        }
        .donation-options button {
            background-color: #f5f5ef; /* Fundo do botão de opção de doação */
            color: #443f3f;
            border: 1px solid #e4adcc;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            font-weight: bold;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
            min-width: 100px; /* Garante tamanho mínimo para botões */
        }
        .donation-options button:hover,
        .donation-options button.selected {
            background-color: #e4adcc; /* Cor ao selecionar/passar o mouse */
            border-color: #8fbfae;
            color: #443f3f;
        }
        #other_amount_group {
            display: none; /* Escondido por padrão, será mostrado com JS */
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
            .donation-options {
                flex-direction: column; /* Botões de doação em coluna em telas menores */
                align-items: center;
            }
            .donation-options button {
                width: 100%; /* Botões de doação ocupam a largura total */
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Segunda Chance Animal</h1>
        <p>Faça Sua Doação e Ajude a Salvar Vidas!</p>
    </header> 

    <div class="form-container">

        </div>

    <footer>
        </footer>
</body>

    <div class="form-container">
        <h2 class="section-title" style="color: #e4adcc;">Sua Contribuição Faz a Diferença!</h2>
        <p style="text-align: center; margin-bottom: 30px;">Cada doação, por menor que seja, nos ajuda a continuar resgatando, cuidando e encontrando lares para animais necessitados. Escolha um valor ou digite sua contribuição:</p>
        
        <form action="processa_doacao.php" method="POST">
            <label>Selecione um valor para doação:</label>
            <div class="donation-options">
                <button type="button" data-amount="25">R$ 25</button>
                <button type="button" data-amount="50">R$ 50</button>
                <button type="button" data-amount="100">R$ 100</button>
                <button type="button" data-amount="200">R$ 200</button>
                <button type="button" data-amount="other">Outro Valor</button>
            </div>

            <div id="other_amount_group">
                <label for="other_amount">Outro valor (R$):</label>
                <input type="number" id="other_amount" name="amount" min="10" placeholder="Digite o valor (ex: 75.00)">
            </div>
            
            <input type="hidden" id="selected_amount" name="amount_hidden" value="">

            <h3 class="section-title" style="font-size: 1.5em; margin-top: 30px; color: #8fbfae;">Seus Dados para o Recibo (Opcional)</h3>

            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome completo">

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="seu.email@exemplo.com">

            <label for="telefone">Telefone (opcional):</label>
            <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX">

            <label for="cpf">CPF (opcional, para recibo fiscal):</label>
            <input type="text" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX">

            <div class="checkbox-group">
                <input type="checkbox" id="anonima" name="anonima" value="sim">
                <label for="anonima" style="display: inline;">Desejo fazer uma doação anônima.</label>
            </div>
            
            <button type="submit" class="submit-btn">Doar Agora</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 Segunda Chance Animal. Todos os direitos reservados.</p>
        <p>Entre em contato: contato@segundachanceanimal.org</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const donationButtons = document.querySelectorAll('.donation-options button');
            const otherAmountGroup = document.getElementById('other_amount_group');
            const otherAmountInput = document.getElementById('other_amount');
            const selectedAmountHidden = document.getElementById('selected_amount');

            donationButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove 'selected' class from all buttons
                    donationButtons.forEach(btn => btn.classList.remove('selected'));
                    // Add 'selected' class to the clicked button
                    this.classList.add('selected');

                    const amount = this.dataset.amount;

                    if (amount === 'other') {
                        otherAmountGroup.style.display = 'block';
                        otherAmountInput.setAttribute('required', 'required');
                        selectedAmountHidden.value = ''; // Limpa o valor oculto
                    } else {
                        otherAmountGroup.style.display = 'none';
                        otherAmountInput.removeAttribute('required');
                        otherAmountInput.value = ''; // Limpa o campo "Outro Valor"
                        selectedAmountHidden.value = amount; // Define o valor selecionado
                    }
                });
            });

            // Sincroniza o input "Outro Valor" com o campo oculto ao digitar
            otherAmountInput.addEventListener('input', function() {
                selectedAmountHidden.value = this.value;
            });
        });
    </script>
</body>
</html>