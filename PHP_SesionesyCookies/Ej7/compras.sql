CREATE DATABASE Compras;
USE Compras;

CREATE TABLE catalogo(
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100),
    precio DECIMAL(9,2)
);

INSERT INTO catalogo(producto,precio) VALUES
('Televisor',250000.00),
('Heladera',1700000.00),
('Lavadora',200000.00);