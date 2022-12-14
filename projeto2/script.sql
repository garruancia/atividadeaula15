mysql -u root
 create database clientes;
 
 use clientes;

 create table dados(
  iddados in primary key auto_increment,
   nome varchar(40) not null,
   email varchar(40) not null,
   telefone varchar(14),
   dtcadastro date 
 );
 insert into dados values
 (null,'ana','2222-3333','ana@gmail.com','2022-11-09');
 select * from dados;
 