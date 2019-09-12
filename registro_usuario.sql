create database ingdatabase;
use ingdatabase; 

create table rol(
	id_rol int(11) auto_increment,
	rol varchar(20),
	primary key (id_rol)
);

create table usuar(
	id_user int(11) auto_increment,	
	username varchar(25),
	contraseña varchar(25),
	email varchar(50),
	nombre varchar(10),
	apellido varchar(10),
	id_rol int(11),
	primary key (id_user),
	foreign key (id_rol) references rol(id_rol)
);