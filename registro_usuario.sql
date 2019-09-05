create database RegistroUseri;
use RegistroUseri; 

create table usuario(

	 username char(25),
	 contraseña char(25),
     email varchar(50),
     nombre char(10),
     apellido char(10),
     rol char(10),
     primary key (username)
);
create table Documentos(
	id_documento int(8) auto_increment,
    nombre char(25),
    autor char(25),
    foreign key (autor) references usuario(username)
);
select * from usuario;
