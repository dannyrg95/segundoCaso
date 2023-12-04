CREATE DATABASE caso2;

USE caso2;

CREATE TABLE Animales (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20),
    image VARCHAR(40),
    especie VARCHAR(20)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


CREATE USER 'caso2_ambiente'@'localhost' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON *.* TO 'caso2_ambiente'@'localhost';
FLUSH PRIVILEGES;