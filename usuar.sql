create database ingdatabase;
use ingdatabase;
create table rol(
	id_rol int(11) auto_increment,
	rol varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
	primary key (id_rol)
);
create table usuar(
	id_user int(11) auto_increment,
	username varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
	contraseña varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
	email varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
	nombre varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
	apellido varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
	id_rol int(11),
	primary key (id_user),
	foreign key (id_rol) references rol(id_rol)
);
create table Documentos(
    id_documento int(11) auto_increment,
    titulo varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
    autor varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
    primary key(id_documento)    
);
create table metadatos(
	id_metadato int(11) auto_increment,
	tamaño int(11),
	tipe varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  ruta varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
 	id_doc int(11),
	primary key(id_metadato),  
	foreign key (id_doc) references Documentos(id_documento)
);
