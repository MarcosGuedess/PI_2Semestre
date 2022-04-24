CREATE DATABASE PI_2Semestre;

USE PI_2Semestre;


CREATE TABLE Usuario(
	id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(30) NOT NULL,
	passw VARCHAR(30) NOT NULL,
	nome VARCHAR(30) NOT NULL,
	contato CHAR(11) NOT NULL,
	cidade VARCHAR(30) NOT NULL,
	pais VARCHAR(30) NOT NULL,
	foto_perfil VARCHAR(30) NOT NULL
);


CREATE TABLE Pontuacao(
	id INT AUTO_INCREMENT PRIMARY KEY,
	id_usuario INT NOT NULL,
	pontuacao_quiz INT NOT NULL,
	resultado_calc DOUBLE NOT NULL,
	atividades_completas INT NOT NULL,
	nivel INT NOT NULL,
	FOREIGN KEY (id_usuario) REFERENCES Usuario(id)
);