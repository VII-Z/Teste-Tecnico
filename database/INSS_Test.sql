create database lista_tarefa;
use lista_tarefa;

create table tarefa(
	id int primary key auto_increment , 
	descricao varchar(255) not null,
    completed boolean default false
);

insert into tarefa (descricao, completed) values ('Tarefa de Casa', default);
select * from tarefa;
