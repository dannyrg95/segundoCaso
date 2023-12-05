CREATE DATABASE caso2;

USE caso2;
drop table Animales;

CREATE TABLE Animales (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20),
    imagen VARCHAR(80),
    especie INT,
    FOREIGN KEY (especie) REFERENCES Especie(id)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Especie (
	id INT PRIMARY KEY AUTO_INCREMENT,
    especie VARCHAR(20)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;



INSERT INTO Especie (especie) VALUES ('MAMIFEROS');
INSERT INTO Especie (especie) VALUES ('AVES');
INSERT INTO Especie (especie) VALUES ('REPTILES');
INSERT INTO Especie (especie) VALUES ('ANFIBIOS');
INSERT INTO Especie (especie) VALUES ('PECES');


-- Insertar animales para la categoría MAMIFEROS
INSERT INTO Animales (nombre, imagen, especie) VALUES
('Elefante', '/leccion-11/images/animales/mamiferos/elefante.jpg', (SELECT id FROM Especie WHERE especie = 'MAMIFEROS')),
('León', '/leccion-11/images/animales/mamiferos/leon.jpg', (SELECT id FROM Especie WHERE especie = 'MAMIFEROS')),
('Delfín', '/leccion-11/images/animales/mamiferos/delfin.jpg', (SELECT id FROM Especie WHERE especie = 'MAMIFEROS'));

-- Insertar animales para la categoría AVES
INSERT INTO Animales (nombre, imagen, especie) VALUES
('Águila', '/leccion-11/images/animales/aves/aguila.jpg', (SELECT id FROM Especie WHERE especie = 'AVES')),
('Pingüino', '/leccion-11/images/animales/aves/pinguino.jpg', (SELECT id FROM Especie WHERE especie = 'AVES')),
('Colibrí', '/leccion-11/images/animales/aves/colibri.jpg', (SELECT id FROM Especie WHERE especie = 'AVES'));

-- Insertar animales para la categoría REPTILES
INSERT INTO Animales (nombre, imagen, especie) VALUES
('Cocodrilo', '/leccion-11/images/animales/reptiles/cocodrilo.jpg', (SELECT id FROM Especie WHERE especie = 'REPTILES')),
('Serpiente', '/leccion-11/images/animales/reptiles/serpiente.jpg', (SELECT id FROM Especie WHERE especie = 'REPTILES')),
('Iguana', '/leccion-11/images/animales/reptiles/iguana.png', (SELECT id FROM Especie WHERE especie = 'REPTILES'));

-- Insertar animales para la categoría ANFIBIOS
INSERT INTO Animales (nombre, imagen, especie) VALUES
('Rana', '/leccion-11/images/animales/anfibios/rana.jpg', (SELECT id FROM Especie WHERE especie = 'ANFIBIOS')),
('Salamandra', '/leccion-11/images/animales/anfibios/salamandra.jpg', (SELECT id FROM Especie WHERE especie = 'ANFIBIOS')),
('Axolotl', '/leccion-11/images/animales/anfibios/axolotl.jpg', (SELECT id FROM Especie WHERE especie = 'ANFIBIOS'));

-- Insertar animales para la categoría PECES
INSERT INTO Animales (nombre, imagen, especie) VALUES
('Tiburón', '/leccion-11/images/animales/peces/tiburon.jpg', (SELECT id FROM Especie WHERE especie = 'PECES')),
('Pez payaso', '/leccion-11/images/animales/peces/pez_payaso.jpg', (SELECT id FROM Especie WHERE especie = 'PECES')),
('Pez globo', '/leccion-11/images/animales/peces/pez_globo.jpg', (SELECT id FROM Especie WHERE especie = 'PECES'));



CREATE USER 'caso2_ambiente'@'localhost' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON *.* TO 'caso2_ambiente'@'localhost';
FLUSH PRIVILEGES;