CREATE DATABASE OurBurden;

USE OurBurden;

#SELECT * FROM usuario
#DROP DATABASE OurBurden;

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

# PROCEDURE Add usuário
# CALL add_usuario();

SELECT * FROM usuario;

delimiter $$
CREATE OR REPLACE PROCEDURE add_usuario(IN newuser VARCHAR(30), IN newsenha VARCHAR(30), IN nome_usuario VARCHAR(30), IN telefone CHAR(11), IN city VARCHAR(30), IN country VARCHAR(30))
BEGIN
	INSERT INTO usuario (username, passw, nome, contato, cidade, pais, foto_perfil)
	VALUES (newuser,newsenha,nome_usuario,telefone,city,country,"default");
END $$
delimiter;


# PROCEDURE Select ID

delimiter $$
CREATE OR REPLACE PROCEDURE login_usuario(IN user_log VARCHAR(30), IN pass_log VARCHAR(30))
BEGIN
	SELECT id FROM usuario WHERE username = user_log AND passw = pass_log;
END $$
delimiter;

#CALL login_usuario("alpcloona","12345");


# PROCEDURE Select usuário

delimiter $$
CREATE OR REPLACE PROCEDURE select_usuario(IN id_select INT)
BEGIN
	SELECT u.id as id, u.nome as nome, u.foto_perfil as foto, 
        u.cidade as cidade,u.pais as pais, u.contato as contato, p.pontuacao_quiz as pont, p.resultado_calc as calc, 
        p.expe as expe, p.arvores as arvores, p.nivel as niv 
        FROM usuario u, pontuacao p 
        WHERE u.id = p.id_usuario
        AND u.id = id_select;
END $$
delimiter;

#CALL select_usuario(1);


#UPDATE CALCULADORA

delimiter $$
CREATE OR REPLACE PROCEDURE update_calculadora(IN soma DOUBLE, IN id_updt INT)
BEGIN
	UPDATE pontuacao 
	SET resultado_calc = soma
   AND id_usuario = id_updt;
END $$
delimiter;


#TRIGGER START PONTUACAO

DELIMITER $$
 
CREATE OR REPLACE TRIGGER start_pontuacao AFTER INSERT ON usuario
FOR EACH ROW
BEGIN
	INSERT INTO pontuacao (id_usuario,pontuacao_quiz,resultado_calc,nivel,expe,arvores)
	VALUES (NEW.id, 0,0,1,0,0);
END $$
 
DELIMITER ;


SELECT expe, nivel FROM WHERE usuario = id



# PROCEDURE ATUALIZA expe

delimiter $$
CREATE OR REPLACE PROCEDURE AddExpe(IN id_att INT, IN new_ex INT)
BEGIN
	
	UPDATE pontuacao
	SET expe = expe + new_ex
	WHERE id = id_att;
	
END $$
delimiter ;




# TRIGGER ATUALIZA NIVEL

delimiter $$
CREATE OR REPLACE TRIGGER AtualizaNivel BEFORE UPDATE ON pontuacao
FOR EACH ROW
BEGIN

	IF (NEW.expe > 100) then
		SET NEW.expe = NEW.expe - 100, NEW.nivel = NEW.nivel + 1;
	END IF;
	
END $$
delimiter ;
