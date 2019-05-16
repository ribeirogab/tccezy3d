CREATE DATABASE batata;
USE batata;

CREATE TABLE acesso(
	mes INT(2),
	ano INT(4),
	tipo VARCHAR(20),
	CONSTRAINT id PRIMARY KEY(mes, ano, tipo),
	cliques INT(11)
)Engine = InnoDB;

CREATE TABLE today(
	dia INT(2),
	fkmes INT(2),
	fkano INT(4),
	fktipo VARCHAR(20),
	FOREIGN KEY(fkmes, fkano, fktipo) REFERENCES acesso(mes, ano, tipo),
	CONSTRAINT id PRIMARY KEY(dia, fkmes, fkano, fktipo),
	cliques INT(2)
)Engine = InnoDB;

CREATE TABLE metas(
	mes INT(2),
	ano INT(4),
	tipo VARCHAR(20),
	CONSTRAINT id PRIMARY KEY(mes, ano, tipo),
	meta INT(11)
)Engine = InnoDB;



CREATE TABLE usuario(
	idusuario INT PRIMARY KEY AUTO_INCREMENT,
	foto VARCHAR(30),
	nome VARCHAR(30) not null,
	cargo VARCHAR(20) not null,
	idioma CHAR(2),
	email VARCHAR(40) not null,
	senha CHAR(40) not null,
	permissao INT(2)
);

CREATE TABLE cliente(
	idcliente INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(20) NOT NULL,
	sobrenome VARCHAR(30) not null,
	email VARCHAR(40) NOT NULL,
	senha VARCHAR(40) NOT NULL,
	telefone CHAR(11) NOT NULL,
	pais VARCHAR(30) NOT NULL,
	ramo VARCHAR(20),
	empresa VARCHAR(20)
)Engine = InnoDB;

CREATE TABLE orcamento(
	idorcamento INT PRIMARY KEY AUTO_INCREMENT,
	fkcliente INT,
	FOREIGN KEY(fkcliente) REFERENCES cliente(idcliente),
	produtos VARCHAR(150),
	descricao TEXT NOT NULL,
	data DATETIME
)Engine = InnoDB;

CREATE TABLE suporte(
	idsuporte INT PRIMARY KEY AUTO_INCREMENT,
	maquina VARCHAR(20) NOT NULL,
	problema VARCHAR(20) NOT NULL,
	descricao TEXT NOT NULL,
	fkcliente INT,
	FOREIGN KEY(fkcliente) REFERENCES cliente(idcliente)
)Engine = InnoDB;


CREATE TABLE imagens(
	idimg INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(40) NOT NULL,
	tipo VARCHAR(40) NOT NULL,
	arquivo VARCHAR(40) NOT NULL,
	descricao TEXT 
);


CREATE TABLE conteudo(
	apelido VARCHAR(20),
	pagina VARCHAR(15),
	pt TEXT,
	en TEXT,
	es TEXT
);