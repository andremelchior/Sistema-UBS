CREATE DATABASE ubs;

USE ubs;

#DDL 
CREATE TABLE paciente(
  cod_paciente int not null auto_increment,
  nome varchar(15) not null,
  sobrenome varchar(45) not null,
  email varchar(45) not null,
  cpf bigint(11) not null,
  rg varchar(9) not null, 
  cns bigint(15) not null, 
  comorbidade varchar(40) not null, 
  deficiencia varchar(30) not null,
  idade tinyint not null,
  nascimento date not null,
  tipo_sanguineo varchar(2) not null,
  CONSTRAINT PK_codPaciente PRIMARY KEY(cod_paciente),
  CONSTRAINT UN_cpf UNIQUE(cpf),
  CONSTRAINT UN_cns UNIQUE(cns) 
);

#DML
INSERT INTO paciente
VALUES(
  default, 
  "Beatriz", 
  "Almeida", 
  35789832145689, 
  "123456789", 
  56789412358, 
  "Arritmia cardiaca, diabetes.", 
  "Deficiencia Fisica",
  22,
  2003-02-13,
  "O+"  
); 

SELECT * from paciente;
