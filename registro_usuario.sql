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
