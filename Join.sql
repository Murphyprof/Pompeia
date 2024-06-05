create database exemplojoin;

use exemplojoin;

create table Cargos(
    codigo_cargo int primary key,
    descricao_cargo varchar(255)
);

create table Funcionarios(
    codigo_funcionario int primary key,
    nome_funcionario varchar(255),
    codigo_cargo int,
    foreign key (codigo_cargo) references Cargos (codigo_cargo)
);

Insert into Cargos (codigo_cargo, descricao_cargo) 
values 
(1, 'Gerente'),
(2, 'Anaslista de Recursos Humanos'),
(3, 'Desenvolvedor de Software'),
(4, 'Contador');

insert into Funcionarios(codigo_funcionario, nome_funcionario, codigo_cargo)
values
(1, 'João Silva', 1),
(2, 'Maria Souza', 2),
(3, 'Pedro Santos', 3),
(4, 'Ana Oliveira', null);

--Inner Join
Select A.nome_funcionario, A.codigo_cargo, B.descricao_cargo
From funcionarios A
INNER Join cargos B ON A.codigo_cargo = B.codigo_cargo;

--Left Join
Select A.nome_funcionario, A.codigo_cargo, B.descricao_cargo
From funcionarios A
Left Join cargos B On A.codigo_cargo = B.codigo_cargo;

--Right Join
Select A.nome_funcionario, A.codigo_cargo, B.descricao_cargo
from funcionarios A 
RIGHT JOIN cargos B ON A.codigo_cargo = B.codigo_cargo;

--Full Join(Não suportado pelo Mysql)
Select A.nome_funcionario, A.codigo_cargo, B.descricao_cargo
From funcionarios A 
FULL OUTER Join cargos B ON A.codigo_cargo = B.codigo_cargo;

--Alternativa para o FULL JOIN
Select A.nome_funcionario, A.codigo_cargo, B.descricao_cargo
From funcionarios A
Left Join cargos B On A.codigo_cargo = B.codigo_cargo;
UNION
Select A.nome_funcionario, A.codigo_cargo, B.descricao_cargo
from funcionarios A 
RIGHT JOIN cargos B ON A.codigo_cargo = B.codigo_cargo;

--Cross Join
select A.nome_funcionario, A.codigo_cargo, B.descricao_cargo
From funcionarios A 
cross join cargos B;

--Left Excluding Join
SELECT A.codigo_funcionario, A.nome_funcionario
FROM Funcionarios A
LEFT JOIN Cargos B ON A.codigo_cargo = B.codigo_cargo
WHERE B.codigo_cargo IS NULL;