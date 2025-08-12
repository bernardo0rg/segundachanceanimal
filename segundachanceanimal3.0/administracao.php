<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - Segunda Chance Animal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos específicos para o painel administrativo */
        body {
            background-color: #f5f5ef; /* Cor de fundo principal */
            color: #443f3f; /* Cor do texto principal */
        }
        header {
            background-color: #443f3f; /* Cabeçalho do admin com cor mais escura */
            color: #f5f5ef;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .admin-wrapper {
            display: flex;
            min-height: calc(100vh - 100px); /* Altura mínima para o wrapper */
        }
        .sidebar {
            background-color: #8fbfae; /* Cor da barra lateral */
            color: #f5f5ef;
            width: 250px;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            flex-shrink: 0; /* Impede que a sidebar encolha */
        }
        .sidebar h2 {
            text-align: center;
            color: #443f3f;
            margin-bottom: 30px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 10px;
        }
        .sidebar ul li a {
            display: block;
            background-color: #e4adcc; /* Cor dos itens do menu */
            color: #443f3f;
            padding: 12px 15px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .sidebar ul li a:hover,
        .sidebar ul li a.active {
            background-color: #f5f5ef; /* Cor ao passar o mouse / ativo */
            color: #8fbfae;
        }
        .main-content {
            flex-grow: 1;
            padding: 30px;
            background-color: #f5f5ef; /* Fundo do conteúdo principal */
        }
        .data-section {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .data-section h2 {
            color: #8fbfae;
            margin-bottom: 20px;
            border-bottom: 2px solid #e4adcc;
            padding-bottom: 10px;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .data-table th,
        .data-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            font-size: 0.9em;
            color: #443f3f;
        }
        .data-table th {
            background-color: #e4adcc; /* Cor do cabeçalho da tabela */
            color: #443f3f;
            font-weight: bold;
        }
        .data-table tr:nth-child(even) {
            background-color: #f5f5ef; /* Linhas pares com cor mais clara */
        }
        .data-table tr:hover {
            background-color: #8fbfae30; /* Efeito hover na linha */
        }
        .no-data {
            text-align: center;
            padding: 30px;
            color: #8fbfae;
            font-style: italic;
        }
        .action-buttons button {
            background-color: #8fbfae;
            color: #f5f5ef;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.85em;
            margin-right: 5px;
            transition: background-color 0.3s ease;
        }
        .action-buttons button:hover {
            background-color: #e4adcc;
            color: #443f3f;
        }

        /* Rodapé para o painel administrativo */
        footer {
            background-color: #443f3f;
            color: #f5f5ef;
            text-align: center;
            padding: 15px 0;
            font-size: 0.8em;
            margin-top: 20px; /* Reduz margem superior do rodapé */
        }

        /* Responsividade */
        @media (max-width: 992px) {
            .admin-wrapper {
                flex-direction: column; /* Em telas menores, sidebar fica no topo */
            }
            .sidebar {
                width: 100%;
                padding: 15px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }
            .sidebar ul {
                display: flex; /* Menu lateral vira horizontal */
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }
            .sidebar ul li {
                margin-bottom: 0;
            }
            .sidebar h2 {
                margin-bottom: 15px;
            }
            .main-content {
                padding: 20px 15px;
            }
            .data-table th,
            .data-table td {
                padding: 8px;
            }
            /* Ocultar colunas menos importantes em telas pequenas (exige JS ou CSS mais avançado para ser dinâmico) */
            .data-table th:nth-child(n+4),
            .data-table td:nth-child(n+4) {
                /* display: none; */ /* Descomente para ocultar a partir da 4ª coluna */
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Painel Administrativo</h1>
        <p>Segunda Chance Animal</p>
    </header>

    <div class="admin-wrapper">
        <div class="sidebar">
            <h2>Navegação</h2>
            <ul>
                <li><a href="#dashboard" class="active">Dashboard</a></li>
                <li><a href="#adocao">Formulários de Adoção</a></li>
                <li><a href="#voluntarios">Formulários de Voluntários</a></li>
                <li><a href="#doacoes">Doações Monetárias</a></li>
                <li><a href="#usuarios">Usuários Cadastrados</a></li>
                <li><a onclick="window.location.href='cadastraranimais.php'">cadastrar pets</a></li>
                <li><a onclick="window.location.href='index.php'">Sair</a></li>
            </ul>
        </div>

        <div class="main-content">
            <div id="dashboard" class="data-section">
                <h2>Visão Geral do Dashboard</h2>
                <p>Bem-vindo(a) ao painel administrativo da Segunda Chance Animal. Aqui você pode gerenciar todas as informações importantes.</p>
                <div style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
                    <div style="background-color: #e4adcc; padding: 20px; border-radius: 8px; text-align: center; flex: 1; min-width: 200px;">
                        <h3 style="color: #443f3f; margin-top: 0;">Adoções Pendentes</h3>
                        <p style="font-size: 2em; font-weight: bold; color: #443f3f;">05</p>
                    </div>
                    <div style="background-color: #8fbfae; padding: 20px; border-radius: 8px; text-align: center; flex: 1; min-width: 200px;">
                        <h3 style="color: #f5f5ef; margin-top: 0;">Novos Voluntários</h3>
                        <p style="font-size: 2em; font-weight: bold; color: #f5f5ef;">12</p>
                    </div>
                    <div style="background-color: #443f3f; padding: 20px; border-radius: 8px; text-align: center; flex: 1; min-width: 200px;">
                        <h3 style="color: #f5f5ef; margin-top: 0;">Doações Recentes</h3>
                        <p style="font-size: 2em; font-weight: bold; color: #f5f5ef;">R$ 1.500</p>
                    </div>
                </div>
            </div>

            <div id="adocao" class="data-section">
                <h2>Formulários de Adoção</h2>
                <p>Lista de candidaturas para adoção de animais.</p>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Animal</th>
                            <th>Candidato</th>
                            <th>Contato</th>
                            <th>Data Envio</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Buddy (Cachorro)</td>
                            <td>Ana Silva</td>
                            <td>ana.s@email.com</td>
                            <td>01/07/2025</td>
                            <td><span style="color: orange;">Pendente</span></td>
                            <td class="action-buttons">
                                <button>Ver Detalhes</button>
                                <button>Aprovar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Miau (Gato)</td>
                            <td>João Pereira</td>
                            <td>joao.p@email.com</td>
                            <td>30/06/2025</td>
                            <td><span style="color: green;">Aprovado</span></td>
                            <td class="action-buttons">
                                <button>Ver Detalhes</button>
                                <button>Finalizar</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7" class="no-data" style="font-style: normal; color: #e4adcc;">
                                (Os dados reais seriam carregados aqui do seu banco de dados.)
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="voluntarios" class="data-section">
                <h2>Formulários de Voluntários</h2>
                <p>Inscrições de pessoas interessadas em serem voluntárias.</p>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Contato</th>
                            <th>Cidade/Estado</th>
                            <th>Interesses</th>
                            <th>Disponibilidade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>V01</td>
                            <td>Maria Oliveira</td>
                            <td>maria.o@email.com</td>
                            <td>São Paulo/SP</td>
                            <td>Cuidado Animais, Eventos</td>
                            <td>4-8h/semana</td>
                            <td class="action-buttons">
                                <button>Ver Detalhes</button>
                                <button>Agendar Entrevista</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7" class="no-data" style="font-style: normal; color: #e4adcc;">
                                (Os dados reais seriam carregados aqui do seu banco de dados.)
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="doacoes" class="data-section">
                <h2>Doações Monetárias</h2>
                <p>Registro de todas as doações recebidas.</p>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Valor</th>
                            <th>Doador</th>
                            <th>E-mail</th>
                            <th>Data</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>D001</td>
                            <td>R$ 100,00</td>
                            <td>Laura Santos</td>
                            <td>laura.s@email.com</td>
                            <td>03/07/2025</td>
                            <td><span style="color: green;">Confirmado</span></td>
                            <td class="action-buttons">
                                <button>Ver Recibo</button>
                            </td>
                        </tr>
                        <tr>
                            <td>D002</td>
                            <td>R$ 50,00</td>
                            <td>Anônimo</td>
                            <td>-</td>
                            <td>02/07/2025</td>
                            <td><span style="color: green;">Confirmado</span></td>
                            <td class="action-buttons">
                                <button>Ver Detalhes</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7" class="no-data" style="font-style: normal; color: #e4adcc;">
                                (Os dados reais seriam carregados aqui do seu banco de dados.)
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="usuarios" class="data-section">
                <h2>Usuários Cadastrados</h2>
                <p>Lista de usuários registrados no site da ONG.</p>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Cidade/Estado</th>
                            <th>Data Cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>U001</td>
                            <td>Carlos Lima</td>
                            <td>carlos.l@email.com</td>
                            <td>Rio de Janeiro/RJ</td>
                            <td>28/06/2025</td>
                            <td class="action-buttons">
                                <button>Ver Perfil</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="no-data" style="font-style: normal; color: #e4adcc;">
                                (Os dados reais seriam carregados aqui do seu banco de dados.)
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Painel Administrativo Segunda Chance Animal. Desenvolvido com amor.</p>
    </footer>

    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarLinks = document.querySelectorAll('.sidebar ul li a');
            const dataSections = document.querySelectorAll('.main-content .data-section');

            function showSection(id) {
                dataSections.forEach(section => {
                    if (section.id === id) {
                        section.style.display = 'block';
                    } else {
                        section.style.display = 'none';
                    }
                });
            }

            sidebarLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault(); // Evita que a página role para o link

                    sidebarLinks.forEach(item => item.classList.remove('active'));
                    this.classList.add('active');

                    const targetId = this.getAttribute('href').substring(1); // Remove o '#'
                    showSection(targetId);
                });
            });

            // Mostra o dashboard por padrão ao carregar a página
            showSection('dashboard');
        });
    </script>
</body>
</html>