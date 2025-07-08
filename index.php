<?php
//start_session()
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segunda Chance Animal - Uma Nova Esperança</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5ef; /* Cor de fundo principal */
            color: #443f3f; /* Cor do texto principal */
        }
        header {
            background-color: #8fbfae; /* Cor do cabeçalho */
            color: #f5f5ef;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        nav {
            background-color: #e4adcc; /* Cor da navegação */
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: #443f3f;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .section-title {
            text-align: center;
            color: #8fbfae;
            margin-bottom: 30px;
            font-size: 2em;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .animal-card {
            background-color: #f5f5ef;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            width: 300px;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .animal-card img {
            max-width: 100%;
            height: 200px; /* Altura fixa para as imagens */
            object-fit: cover; /* Garante que a imagem preencha o espaço sem distorcer */
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .animal-card h3 {
            color: #8fbfae;
            margin-top: 0;
        }
        .animal-card p {
            font-size: 0.9em;
            color: #443f3f;
            text-align: left;
        }
        .buttons-section {
            text-align: center;
            margin-top: 40px;
        }
        .btn {
            background-color: #e4adcc; /* Cor dos botões */
            color: #443f3f;
            padding: 12px 25px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #8fbfae; /* Cor do botão ao passar o mouse */
            color: #f5f5ef;
        }
        footer {
            background-color: #443f3f; /* Cor do rodapé */
            color: #f5f5ef;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Segunda Chance Animal</h1>
        <p>Uma nova esperança para quem mais precisa</p>
    </header>

    <nav>
        <a href="#sobre">Sobre Nós</a>
        <a href="#adocao">Para Adoção</a>
        <a href="#contato">Contato</a>
    </nav>

    <div class="container" id="sobre">
        <h2 class="section-title">Nossa Missão</h2>
        <p>A Segunda Chance Animal é uma ONG dedicada a resgatar, reabilitar e encontrar lares amorosos para animais abandonados e em situação de risco. Acreditamos que todo animal merece uma segunda chance de ter uma vida digna e cheia de carinho.</p>
        <p>Trabalhamos incansavelmente com a ajuda de voluntários e doadores para proporcionar a esses seres indefesos o cuidado, a atenção e o amor que eles tanto precisam.</p>
    </div>

    <div class="container" id="adocao">
        <h2 class="section-title">Animais para Adoção</h2>
        <div class="gallery">
            <div class="animal-card">
                <img src="https://via.placeholder.com/300x200?text=Animal+1" alt="Nome do Animal 1">
                <h3>Nome do Animal 1</h3>
                <p><strong>Espécie:</strong> Cachorro</p>
                <p><strong>Raça:</strong> Vira-lata</p>
                <p><strong>Idade:</strong> 2 anos</p>
                <p><strong>Porte:</strong> Médio</p>
                <p><strong>Descrição:</strong> Um cão muito dócil e brincalhão, adora crianças e outros animais. Ideal para famílias ativas.</p>
            </div>

            <div class="animal-card">
                <img src="https://via.placeholder.com/300x200?text=Animal+2" alt="Nome do Animal 2">
                <h3>Nome do Animal 2</h3>
                <p><strong>Espécie:</strong> Gato</p>
                <p><strong>Raça:</strong> Siamês</p>
                <p><strong>Idade:</strong> 1 ano</p>
                <p><strong>Porte:</strong> Pequeno</p>
                <p><strong>Descrição:</strong> Gata curiosa e independente, mas adora um carinho no final do dia. Perfeita para apartamentos.</p>
            </div>

            <div class="animal-card">
                <img src="https://via.placeholder.com/300x200?text=Animal+3" alt="Nome do Animal 3">
                <h3>Nome do Animal 3</h3>
                <p><strong>Espécie:</strong> Cachorro</p>
                <p><strong>Raça:</strong> Labrador</p>
                <p><strong>Idade:</strong> 4 meses</p>
                <p><strong>Porte:</strong> Grande (filhote)</p>
                <p><strong>Descrição:</strong> Filhote de Labrador cheio de energia, busca uma família que goste de longas caminhadas e brincadeiras.</p>
            </div>
            </div>
    </div>

    <div class="container buttons-section">
        <h2 class="section-title">Como Você Pode Ajudar</h2>
        <a href="#" class="btn">Doar Agora</a>
        <a href="#" class="btn">Adotar um Animal</a>
        <a href="#" class="btn">Ser Voluntário</a>
        <a href="#" class="btn">Inscrever-se</a>
    </div>

    <footer id="contato">
        <p>&copy; 2025 Segunda Chance Animal. Todos os direitos reservados.</p>
        <p>Entre em contato: contato@segundachanceanimal.org</p>
    </footer>
</body>
</html>