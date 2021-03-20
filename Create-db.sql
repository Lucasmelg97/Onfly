--<?php echo date('d/m/Y H:i:s', strtotime($data)); ?> mostrará 09/01/2008 14:01:06.

-- create table vendadeservicos(iDchamada int NOT NULL AUTO_INCREMENT,
-- filial int not null, UF varchar(2), servico varchar(50),
-- numVenda int not NULL, Datavenda date, UltimaAtivacao date,
-- Vendedor varchar(30) not null,Cliente varchar(30) not null,
-- CPF varchar(14) not null unique, endereco varchar(50), Plano varchar(50),
-- trocamigracao varchar(20), Trocafidelizada varchar(3), MarcaModelo varchar(30),
-- acesso varchar(20),portabilidade varchar(20), Vencimento varchar(3),
-- ContaDigital varchar(3), valorplano decimal(10,2), receita decimal(10,2),
-- primary key(iDchamada));

create table despesa(ID_despesa int NOT null AUTO_INCREMENT,
descricao_despesa varchar(200) not null,
 data_despesa date not null,  imagem_despesa varchar(100) not null, usuario_despesa varchar(50) not null,
 valor_despesa decimal(10,2) not null, primary key(ID_despesa));



create table acesso(ID_usuario int NOT null AUTO_INCREMENT,
usuario varchar(50) not null,senha varchar(30) not null, primary key(ID_usuario));

ALTER TABLE acesso ADD FOREIGN KEY (id_despesa) REFERENCES despesa(ID_despesa);

