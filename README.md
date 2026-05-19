🌿 Feira Bosque da Paz — Prova de Conceito
📌 Sobre o Projeto

O projeto Feira Bosque da Paz nasceu durante o desenvolvimento do Projeto Integrador do curso de Análise e Desenvolvimento de Sistemas, com o objetivo de auxiliar pequenos expositores de feiras livres na divulgação de seus produtos e serviços.

A proposta busca solucionar dificuldades enfrentadas por comerciantes locais que dependem exclusivamente de redes sociais genéricas para divulgação, enfrentando limitações como:

baixo alcance orgânico;
dificuldade de segmentação geográfica;
organização limitada das informações;
baixa visibilidade para novos clientes.

A ideia central do sistema é oferecer um ambiente digital simples, organizado e acessível para apresentação dos expositores participantes da feira.

🎯 Prova de Conceito Desenvolvida

Para esta etapa do Projeto Integrador, foi desenvolvida uma Prova de Conceito (POC) focada no:

✅ Cadastro de Expositores

O sistema permite:

cadastrar expositores;
armazenar informações básicas;
realizar upload da logo/imagem do expositor;
salvar os dados no banco de dados;
consumir os dados através de uma API;
exibir dinamicamente cards na página principal.
🧩 Funcionalidades Implementadas
📋 Cadastro de Expositores

O formulário permite cadastrar:

Nome;
Telefone;
Descrição;
Imagem/logo.
🖼️ Upload de Imagem

As imagens enviadas são armazenadas localmente na pasta:

Public/uploads/
🔄 API REST Simples

O sistema possui endpoints em PHP responsáveis por:

Cadastro
/api/expositores/cadastrar.php
Listagem
/api/expositores/listar.php

As respostas são retornadas em formato JSON.

🧱 Renderização Dinâmica de Cards

A página inicial consome os dados da API utilizando JavaScript assíncrono com Fetch API.

Os cards são gerados dinamicamente contendo:

imagem do expositor;
nome;
descrição;
telefone.
🏗️ Arquitetura Utilizada

O projeto foi estruturado utilizando uma arquitetura MVC simplificada.

Estrutura do Projeto
feira-bosque-paz/
│
├── App/
│   │
│   ├── Config/
│   │   └── Database.php
│   │
│   ├── Model/
│   │   └── Expositor.php
│
├── api/
│   │
│   └── expositores/
│       ├── cadastrar.php
│       └── listar.php
│
├── Public/
│   │
│   ├── assets/
│   │   ├── css/
│   │   │   └── style.css
│   │   │
│   │   ├── js/
│   │   │   ├── js-cadastrar-expositor.js
│   │   │   └── js-listar-expositores.js
│   │
│   ├── uploads/
│   │
│   ├── cadastrar-expositor.php
│   └── index.php
│
└── README.md
💻 Tecnologias Utilizadas
Frontend
HTML5
CSS3
JavaScript
Fetch API
Backend
PHP
Programação Orientada a Objetos (POO)
API REST simples
Banco de Dados
MySQL
PDO
🛠️ Preparação do Ambiente de Desenvolvimento
📥 Requisitos

Para executar o projeto localmente é necessário possuir:

XAMPP;
PHP 8+;
MySQL;
Navegador Web.
⚙️ Configuração do Projeto
1. Clonar ou baixar o projeto

Coloque a pasta do projeto dentro do diretório:

htdocs

Exemplo:

C:/xampp/htdocs/feira-bosque-paz
2. Criar o banco de dados

Criar o banco:

CREATE DATABASE feira_bosque_paz;
3. Criar a tabela expositor
CREATE TABLE expositor (
    id_expositor INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    descricao TEXT NOT NULL,
    logo VARCHAR(255) NOT NULL,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
4. Configurar conexão com banco

Arquivo:

App/Config/Database.php

Alterar:

private $host = "localhost";
private $dbname = "feira_bosque_paz";
private $user = "root";
private $password = "1234";

Conforme as credenciais locais.

5. Iniciar Apache e MySQL

Iniciar os serviços pelo painel do XAMPP.

6. Executar o Projeto

Abrir no navegador:

http://localhost/feira-bosque-paz/Public/
📚 Conceitos Aplicados

Durante o desenvolvimento da prova de conceito foram aplicados conceitos importantes da área de desenvolvimento web:

arquitetura MVC;
Programação Orientada a Objetos;
manipulação de formulários;
upload de arquivos;
APIs em PHP;
consumo de APIs com JavaScript;
requisições assíncronas;
integração frontend/backend;
manipulação de banco de dados com PDO.
🚀 Melhorias Futuras

O projeto poderá evoluir futuramente com:

autenticação de usuários;
painel administrativo;
múltiplas imagens por expositor;
geolocalização;
sistema de categorias;
avaliações;
integração com mapas;
pesquisa por produtos;
responsividade avançada;
hospedagem online.
👨‍💻 Desenvolvido por

Projeto Integrador desenvolvido por estudantes do curso de:

Análise e Desenvolvimento de Sistemas

com foco em soluções digitais para fortalecimento do comércio local e inclusão tecnológica.

🌱 Considerações Finais

A prova de conceito demonstrou a viabilidade de uma plataforma simples e funcional para divulgação de expositores de feiras livres.

Mesmo em uma versão inicial, o sistema já permite o cadastro e apresentação visual dos participantes da feira, servindo como base para futuras evoluções e melhorias.

Como toda boa aplicação web em desenvolvimento, o projeto também serviu como laboratório prático para aplicação de conceitos fundamentais de desenvolvimento full stack.
