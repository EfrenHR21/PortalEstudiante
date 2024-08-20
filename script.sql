drop database if exists BDPortal;
create database BDPortal;
use BDPortal;

drop table usuario,
create table usuario(
    codUsu int primary key auto_increment not null,
    nombreUsu varchar(50) not null,
    password varchar(50) not null
);

insert into usuario(codUsu,nombreUsu,password) values
(1,'AL0001','alumno1'),
(2,'AL0002','alumno2'),
(3,'AL0003','alumno3'),
(4,'AL0004','alumno4'),
(5,'AL0005','alumno5');



drop table pdf,
create table (
    idPdf int primary key auto_increment not null,
    nombrePdf varchar(50) not null,
    descripcionPdf varchar(200) not null,
    archivo varchar(500) not null,
    type varchar(10) not null
);




