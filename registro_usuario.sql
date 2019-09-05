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
     primary key (id_rol),
     foreign key (id_rol) references usuario(rol)
);

create table Documentos(
    id_documento int(8) auto_increment,
    nombre char(25),
    autor char(25),
    permisos int(11),
    foreign key (autor) references usuario(username),
    foreign key (permisos) references usuario(rol)
);
