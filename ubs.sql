CREATE DATABASE ubs;

USE ubs;

CREATE TABLE paciente(
  cod_paciente int not null auto_increment,
  nome varchar(15) not null,
  sobrenome varchar(45) not null,
  cpf bigint(11) not null unique,
  rg varchar(8) not null,
  cns bigint(15) not null
)
