CREATE DATABASE prueba;

-- crear DB --
CREATE TABLE rol (
    id int(10) NOT NULL primary key,
    cargo VARCHAR(50) NOT NULL,
);

CREATE TABLE usuarios (
    id int(10) NOT NULL primary key,
    email VARCHAR(50) NOT NULL,
    usuario VARCHAR(50) NOT NULL,
    contraseña VARCHAR(50) NOT NULL,
    id_cargo int(10) NOT NULL foreign key,
);

-- Añadir datos --
INSERT INTO rol(cargo) VALUES('Administrador');
INSERT INTO rol(cargo) VALUES('cliente');

INSERT INTO usuarios(usuario,contraseña,email,id_cargo) VALUES('','','','');

-- Update --
UPDATE usuarios SET usuario='', contraseña='', email='' WHERE id='';

-- Eliminar --
DELETE FROM usuarios WHERE id='';

-- consultar --
SELECT*FROM usuarios WHERE id>2;
SELECT*FROM usuarios WHERE usuario = '';