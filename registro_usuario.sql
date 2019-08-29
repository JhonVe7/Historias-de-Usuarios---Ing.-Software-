create database RegistroUseri;
use RegistroUseri; 

create table usuario(

	 username char(25),
	 contraseña char(25),
     email varchar(50),
     nombre char(10),
     apellido char(10),
     primary key (username)
);

create table roles(
	
	id_rol int,
    username_rol char(25),
    tipo_rol char(25),
	primary key (id_rol),
    foreign key(username_rol) references usuario(username)
);

create table administrador(
	username_admin char(25),
    permisos char (25),
    foreign key (username_admin) references roles(username_rol)
);
