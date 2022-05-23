CREATE DATABASE PI_2Semestre;

USE PI_2Semestre;

DROP DATABASE PI_2Semestre;

CREATE TABLE Usuario(
	id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(30) NOT NULL UNIQUE,
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
	nivel INT NOT NULL,
	expe INT NOT NULL,
	arvores INT NOT NULL,
	FOREIGN KEY (id_usuario) REFERENCES Usuario(id)
);


INSERT INTO usuario(username,passw,nome,contato,cidade,pais,foto_perfil)
VALUES ('Antonio', 'senha12345','Antonio Candioto', '19971478359','Pirassununga','Brasil','/images_perfil/default.jpg');

SELECT * FROM usuario;

INSERT INTO Pontuacao(id_usuario,pontuacao_quiz,resultado_calc,arvores,nivel,expe)
VALUES (1, 20,50.6,6,2, 62);

SELECT * FROM pontuacao;

SELECT u.id, u.nome, u.foto_perfil, p.pontuacao_quiz,p.resultado_calc,p.expe,p.nivel 
        FROM usuario u, pontuacao p 
        WHERE u.id = p.id_usuario
        

UPDATE usuario SET foto_perfil = 'images_perfil/default.png' WHERE id = 1

UPDATE usuario SET resultado_calc = 40 WHERE id = 1