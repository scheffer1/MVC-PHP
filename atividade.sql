/*


create table medico 
(
	codmed int not null AUTO_INCREMENT PRIMARY key,
	nome varchar(60),
  	endereço varchar(100),
  	telefone int not null,
  	crm int not null,
  	codcid int,
  	CONSTRAINT FOREIGN key(codcid) REFERENCES cidade(codcid)
 )
 
 create table paciente
(
	codpac int  not null AUTO_INCREMENT PRIMARY key,
	nome varchar(60) not null,
  	endereço varchar(100) not null,
  	telefone int not null,
  	codcid int,
  	CONSTRAINT FOREIGN key(codcid) REFERENCES cidade(codcid)
 )
 
 CREATE TABLE cidade 
(
	codcid int not null AUTO_INCREMENT PRIMARY KEY,
  	nome varchar(100) not null,
  	uf char(2) NOT null
)

CREATE table consulta
(
	codconsulta int not null  AUTO_INCREMENT PRIMARY key,
  	codmed int,
  	codpac int,
  	datacons date,
  	horacons time,
  
  CONSTRAINT fk_consultamedico FOREIGN KEY(codmed)
  REFERENCES medico(codmed),
  CONSTRAINT fk_consultapaciente FOREIGN KEY(codpac)
  REFERENCES paciente(codpac)
  
)

CREATE TABLE medicamento
(
	codmedicamento int not null AUTO_INCREMENT PRIMARY KEY,
  	nome varchar(256),
  	composicao varchar(256),
  	preco DOuble
)

CREATE TABLE prescricao
(
	codconsulta int,
  	codmedicamento int,
  	posologia varchar(110),
  	PRIMARY key(codconsulta, codmedicamento),
  	CONSTRAINT fk_consulpresc FOREIGN KEY(codconsulta)
  	REFERENCES consulta(codconsulta),
  	CONSTRAINT fk_prescmedicamento FOREIGN KEY(codmedicamento)
  	REFERENCES medicamento(codmedicamento)
  
) 
*/




 
