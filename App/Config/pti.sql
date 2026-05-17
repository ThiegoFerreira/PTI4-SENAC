CREATE DATABASE feira_bosque_paz;

USE feira_bosque_paz;

CREATE TABLE expositor (
    id_expositor INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    descricao TEXT NOT NULL,
    logo VARCHAR(255) NOT NULL,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

select * from expositor;