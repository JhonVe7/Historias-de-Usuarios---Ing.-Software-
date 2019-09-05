create database RegistroUseri;
use RegistroUseri; 

create table usuario(
     username varchar(25),
     contraseña varchar(25),
     email varchar(50),
     nombre varchar(10),
     apellido varchar(10),
     rol varchar(25),
     primary key (username)
);

create table rol(
     id_rol int(11) auto_increment,
     rol varchar(20),
     primary key (id_rol)
);

create table Documentos(
    id_documento int(8) auto_increment,
    nombre varchar(25),
    autor varchar(25),
    permisos varchar(20),
    primary key (id_documento)
);

ALTER TABLE rol ADD FOREIGN KEY (rol) REFERENCES usuario(username);
ALTER TABLE Documentos ADD FOREIGN KEY (autor) REFERENCES usuario (username);
ALTER TABLE Documentos ADD FOREIGN KEY (permisos) REFERENCES usuario (username);