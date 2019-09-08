create database Registri;
use RegistroUseri; 

create table rol(
	 id_rol int(11) auto_increment,
	 rol varchar(20),
     primary key (id_rol)
);

create table usuario(
	 id_user int(11) auto_increment,	
	 username char(25),
	 contraseña char(25),
     email varchar(50),
     nombre char(10),
     apellido char(10),
     id_rol int(11),
     primary key (id_user),
     foreign key (id_user) references rol(id_rol)
);

create table Documentos(
    id_documento int(11) auto_increment,
    nombre char(25),
    autor char(25),
    foreign key (id_documento) references usuario(id_user)
);
