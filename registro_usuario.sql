create database RegistroUseri;
use RegistroUseri; 

create table usuario(
     username char(25),
     contraseña char(25),
     email varchar(50),
     nombre char(10),
     apellido char(10),
     rol int(11),
     primary key (username)
);

create table rol(
     id_rol int(11) auto_increment,
     rol varchar(20),
     primary key (id_rol)
);

create table Documentos(
    id_documento int(8) auto_increment,
    nombre char(25),
    autor char(25),
    permisos int(11),
    primary key (id_documento)
);
ALTER TABLE rol ADD FOREIGN KEY (id_rol) REFERENCES usuario (rol);
ALTER TABLE Documentos ADD FOREIGN KEY (autor) REFERENCES usuario (username) ;
ALTER TABLE Documentos ADD FOREIGN KEY (permisos) REFERENCES usuario (rol) ;
