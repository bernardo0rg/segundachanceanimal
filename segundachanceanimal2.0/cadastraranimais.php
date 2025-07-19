<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Animal - Segunda Chance Animal</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f5ef;
      color: #443f3f;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    .form-container {
      background-color: #fff;
      border: 2px solid #e4adcc;
      border-radius: 12px;
      padding: 40px;
      width: 100%;
      max-width: 600px;
      box-shadow: 0 0 20px rgba(68, 63, 63, 0.1);
    }

    h2 {
      text-align: center;
      color: #8fbfae;
      margin-bottom: 30px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
    }

    input,
    select,
    textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #8fbfae;
      border-radius: 8px;
      background-color: #f5f5ef;
      resize: vertical;
    }

    input[type="file"] {
      background-color: white;
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
      transition: background 0.3s;
    }

    button:hover {
      background-color: #76a999;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Cadastrar Animal para Adoção</h2>
    <form action="/salvar-animal" method="POST" enctype="multipart/form-data">
      <label for="nome">Nome do Animal</label>
      <input type="text" id="nome" name="nome" placeholder="Ex: Luna" required>

      <label for="especie">Espécie</label>
      <select id="especie" name="especie" required>
        <option value="">Selecione</option>
        <option value="Cachorro">Cachorro</option>
        <option value="Gato">Gato</option>
        <option value="Outro">Outro</option>
      </select>

      <label for="raca">Raça</label>
      <input type="text" id="raca" name="raca" placeholder="Ex: Labrador">

      <label for="idade">Idade</label>
      <input type="text" id="idade" name="idade" placeholder="Ex: 2 anos">

      <label for="porte">Porte</label>
      <select id="porte" name="porte" required>
        <option value="">Selecione</option>
        <option value="Pequeno">Pequeno</option>
        <option value="Médio">Médio</option>
        <option value="Grande">Grande</option>
      </select>

      <label for="descricao">Descrição</label>
      <textarea id="descricao" name="descricao" rows="4" placeholder="Fale um pouco sobre o animal..." required></textarea>

      <label for="imagens">Fotos do Animal</label>
      <input type="file" id="imagens" name="imagens[]" accept="image/*" multiple required>

      <button type="submit">Cadastrar Animal</button>
    </form>
  </div>

</body>
</html>
