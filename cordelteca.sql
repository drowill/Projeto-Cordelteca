create database db_cordelteca;
use db_cordelteca;

create table tb_cordeis(
	cor_id int auto_increment primary key not null,
    cor_titulo varchar(255) not null,
    cor_autor varchar(255) not null,
    cor_local varchar(255) not null,
    cor_data varchar(255) not null,
    cor_capa varchar(255) not null,
    cor_pagina int not null,
    cor_volume int not null, 
    cor_origem varchar(255) not null,
    cor_armario varchar(255) not null,
    cor_prateleira varchar(255) not null
);

select * from tb_cordeis;