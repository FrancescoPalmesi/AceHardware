create database aceHardware;
use aceHardware;
create table Clientes(
idCliente int not null auto_increment primary key,
Nome varchar(80) not null,
CPF varchar(20) not null,
Email varchar(120) not null,
Telefone varchar(30) not null,
Endereco varchar(220) not null
);