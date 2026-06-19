CREATE DATABASE base2;
USE base2;

CREATE TABLE alumnos(
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    codigocurso INT,
    mail VARCHAR(100)
);

INSERT INTO alumnos(nombre,codigocurso,mail)
VALUES
('Lara Pablo',1,'larab@gmail.com'),
('Tiago Ojeda',2,'TOjeda@gmail.com');