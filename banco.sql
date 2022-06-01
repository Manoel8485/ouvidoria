drop database if exists ouvidoria;
create database ouvidoria;
use ouvidoria;

/*
create table login (
id int primary key auto_increment,
usuario varchar(20),
senha varchar(12)
);

insert into login values (null, "admin", "admin");

create table requisicao (
id int primary key auto_increment,
unidade varchar(300),
categoria int,
desc_categoria varchar(250),
descricao text,
servidor varchar(250),
rua varchar(250),
numero varchar(10),
bairro varchar(200),
referencia varchar(300),
cidade varchar(250), 
estado varchar(200)
);

insert into requisicao values (null, "SEMETUR - Secretaria Municipal de Esportes e Turismo", 0,"Cultura de Turismo", "Pedimos comemoração ao dia do índio", "","Rua das pedras", "524", "Bela Vista", "Escola José Francisco","Ji-Paraná","Rondônia");