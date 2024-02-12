-- Create the database
CREATE DATABASE IF NOT EXISTS VentaDeAsados;

-- Use the database
USE VentaDeAsados;

-- Create the tables
CREATE TABLE IF NOT EXISTS Users (
    userId INT AUTO_INCREMENT PRIMARY KEY,
    nombreUsuario VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50),
    email VARCHAR(50) NOT NULL,
    telefono VARCHAR(10) NOT NULL,
    clave VARCHAR(100) NOT NULL,
    tipoUsuario INT NOT NULL -- 1: Admin, 2: Cliente
);

CREATE TABLE IF NOT EXISTS TipoPlato (
    tipoId INT AUTO_INCREMENT PRIMARY KEY,
    nombreTipo VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS TipoReserva (
    tipoReserva INT AUTO_INCREMENT PRIMARY KEY,
    nombreReserva VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS Plato (
    platoId INT AUTO_INCREMENT PRIMARY KEY,
    nombrePlato VARCHAR(50) NOT NULL,
    descripcionPlato TEXT NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    tipoId INT NOT NULL,
    FOREIGN KEY (tipoId) REFERENCES TipoPlato(tipoId)
);

CREATE TABLE IF NOT EXISTS Reserva (
    reservaId INT AUTO_INCREMENT PRIMARY KEY,
    fechaReserva DATE NOT NULL,
    horaReserva TIME NOT NULL,
    tipoReserva INT NOT NULL,
    userId INT NOT NULL,
    FOREIGN KEY (tipoReserva) REFERENCES TipoReserva(tipoReserva),
    FOREIGN KEY (userId) REFERENCES Users(userId)
);

CREATE TABLE IF NOT EXISTS DetalleReserva (
    platoId INT NOT NULL,
    reservaId INT NOT NULL,
    cantidad INT NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    subtotal DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (platoId, reservaId),  -- Clave primaria compuesta
    FOREIGN KEY (platoId) REFERENCES Plato(platoId),
    FOREIGN KEY (reservaId) REFERENCES Reserva(reservaId)
);

CREATE TABLE IF NOT EXISTS Opinion (
    opinionId INT AUTO_INCREMENT PRIMARY KEY,
    opinion TEXT NOT NULL,
    userId INT NOT NULL,
    platoId INT NOT NULL,
    puntuacion INT NOT NULL,
    FOREIGN KEY (userId) REFERENCES Users(userId),
    FOREIGN KEY (platoId) REFERENCES Plato(platoId)
);

CREATE TABLE IF NOT EXISTS Galeria (
    imagenId INT AUTO_INCREMENT PRIMARY KEY,
    imagenBase64 TEXT NOT NULL,
    imagen VARCHAR(100) NOT NULL, 
    platoId INT NOT NULL,
    FOREIGN KEY (platoId) REFERENCES Plato(platoId)
);

-- Insert the data
INSERT INTO TipoPlato (nombreTipo) VALUES 
    ('Sopas'), 
    ('Light'), 
    ('Tablitas'),
    ('Hamburguesas'), 
    ('Niños'),
    ('Porciones'), 
    ('Cortes PREMIUM'), 
    ('Mar'),
    ('Churrascos'), 
    ('Alitas'),  
    ('Mexicana'), 
    ('Menestras'), 
    ('Picaditas'), 
    ('Bebidas'); 
INSERT INTO TipoReserva (nombreReserva) VALUES 
    ('Domicilio'), 
    ('Restaurante'), 
    ('Evento'), 
    ('Catering'), 
    ('Empresarial'), 
    ('Familiar'), 
    ('Amigos'), 
    ('Cumpleaños'), 
    ('Aniversario'), 
    ('Boda'), 
    ('Graduación'), 
    ('Despedida de soltero'), 
    ('Despedida de soltera'), 
    ('Baby Shower'), 
    ('Bautizo'), 
    ('Primera Comunión'), 
    ('Confirmación'), 
    ('Quinceañera'), 
    ('Bautizo');

-- Insert the admin user
INSERT INTO Users (nombreUsuario, nombre, apellido, email, telefono, clave, tipoUsuario) VALUES 
    ('admin', 'admin', 'admin', 'admin@gmail.com','0123456789', '1234', 1),
    ('erick', 'ERICK', 'MALAN', 'erickjpk1234@gmail.com','0123456789', '1234', 1),
    ('pablo', 'PABLO', 'CARVAJAL', 'pablo.carvajal@espoch.edu.ec','0123456789', '1234', 1),
    ('erickjoel', 'ERICK JOEL', 'SANCHEZ', 'joel.sanchez@espoch.edu.ec','0123456789', '1234', 1),
    ('franklin', 'FRANKLIN', 'NOBOA', 'franklin.noboa@espoch.edu.ec','0123456789', '1234', 1),
    ('andres', 'ANDRES', 'CHISAGUANO', 'andres.chisaguano@espoch.edu.ec','0123456789', '1234', 1),
    ('danilo', 'DANILO', 'BAQUERO', 'danilo.baquero@espoch.edu.ec','0123456789', '1234', 1);

