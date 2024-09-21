/* Adicionando produtos */
INSERT INTO [produtos]
		(	[COD_PRODUTO], 
			[NOME_PRODUTO], 
			[EMBALAGEM], 
			[SABOR], 
			[TAMANHO], 
			[PRECO_LISTA]	)
VALUES
	('788975','Peda�os de Frutas - 1,5 Litros - Ma�a','PET','Ma�a','1,5 Litros',18.01),
	('1002767','Videira do Campo - 700 ml - Cereja/Ma�a','Garrafa','Cereja/Ma�a','700 ml',8.41),
	('231776','Festival de Sabores - 700 ml - A�ai','Garrafa','A�ai','700 ml',13.31),
	('479745','Clean - 470 ml - Laranja','Garrafa','Laranja','470 ml',3.76),
	('1051518','Frescor do Ver�o - 470 ml - Lim�o','Garrafa','Lim�o','470 ml',3.29),
	('1101035','Linha Refrescante - 1 Litro - Morango/Lim�o','PET','Morango/Lim�o','1 Litro',9.01),
	('229900','Peda�os de Frutas - 350 ml - Ma�a','Lata','Ma�a','350 ml',4.21),
	('1086543','Linha Refrescante - 1 Litro - Manga','PET','Manga','1 Litro',11.01),
	('695594','Festival de Sabores - 1,5 Litros - A�ai','PET','A�ai','1,5 Litros',28.51),
	('838819','Clean - 1,5 Litros - Laranja','PET','Laranja','1,5 Litros',12.01),
	('326779','Linha Refrescante - 1,5 Litros - Manga','PET','Manga','1,5 Litros',16.51),
	('520380','Peda�os de Frutas - 1 Litro - Ma�a','PET','Ma�a','1 Litro',12.01),
	('1041119','Linha Citros - 700 ml - Lima/Lim�o','Garrafa','Lima/Lim�o','700 ml',4.90),
	('243083','Festival de Sabores - 1,5 Litros - Maracuj�','PET','Maracuj�','1,5 Litros',10.51),
	('394479','Sabor da Montanha - 700 ml - Cereja','Garrafa','Cereja','700 ml',8.40),
	('746596','Light - 1,5 Litros - Melancia','PET','Melancia','1,5 Litros',19.50),
	('773912','Clean - 1 Litro - Laranja','PET','Laranja','1 Litro',8.01),
	('826490','Linha Refrescante - 700 ml - Morango/Lim�o','Garrafa','Morango/Lim�o','700 ml',6.31),
	('723457','Festival de Sabores - 700 ml - Maracuj�','Garrafa','Maracuj�','700 ml',4.91),
	('812829','Clean - 350 ml - Laranja','Lata','Laranja','350 ml',2.80),
	('290478','Videira do Campo - 350 ml - Melancia','Lata','Melancia','350 ml',4.56),
	('783663','Sabor da Montanha - 700 ml - Morango','Garrafa','Morango','700 ml',7.70),
	('235653','Frescor do Ver�o - 350 ml - Manga','Lata','Manga','350 ml',3.85),
	('1002334','Linha Citros - 1 Litro - Lima/Lim�o','PET','Lima/Lim�o','1 Litro',7.00),
	('1013793','Videira do Campo - 2 Litros - Cereja/Ma�a','PET','Cereja/Ma�a','2 Litros',24.01),
	('1096818','Linha Refrescante - 700 ml - Manga','Garrafa','Manga','700 ml',7.71),
	('1022450','Festival de Sabores - 2 Litros - A�ai','PET','A�ai','2 Litros',38.01);


/* Adicionando clientes */
INSERT INTO [clientes] VALUES
	('1471156710','Erica Carvalho','R. Iriquitia',' ','Jardins','SP','80012212','1990-09-01',32,'F',1700000000,24500,0),
	('19290992743','Fernando Cavalcante','R. Dois de Fevereiro',' ','Agua Santa','RJ','22000000','2000-02-12',23,'M',1000000000,20000,1),
	('2600586709','Cesar Teixeira','Rua Conde de Bonfim',' ','Tijuca','RJ','22020001','2000-03-12',23,'M',1200000000,22000,0),
	('3623344710','Marcos Nogueira','Av. Pastor Martin Luther King Junior',' ','Inhauma','RJ','22002012','1995-01-13',28,'M',1100000000,22000,1),
	('492472718','Eduardo Jorge','R. Volta Grande',' ','Tijuca','RJ','22012002','1994-07-19',28,'M',750000000,9500,1),
	('50534475787','Abel Silva','Rua Humaita',' ','Humaita','RJ','22000212','1995-09-11',27,'M',1700000000,26000,0),
	('5576228758','Petra Oliveira','R. Benicio de Abreu',' ','Lapa','SP','88192029','1995-11-14',27,'F',700000000,16000,1),
	('5648641702','Paulo Cesar Mattos','Rua Helio Beltrao',' ','Tijuca','RJ','21002020','1991-08-30',31,'M',1200000000,22000,0),
	('5840119709','Gabriel Araujo','R. Manuel de Oliveira',' ','Santo Amaro','SP','80010221','1985-03-16',37,'M',1400000000,21000,1),
	('7771579779','Marcelo Mattos','R. Eduardo Luis Lopes',' ','Bras','SP','88202912','1992-03-25',30,'M',1200000000,20000,1),
	('8502682733','Valdeci da Silva','R. Srg. Edison de Oliveira',' ','Jardins','SP','82122020','1995-10-07',27,'M',1100000000,19000,0),
	('8719655770','Carlos Eduardo','Av. Gen. Guedes da Fontoura',' ','Jardins','SP','81192002','1983-12-20',39,'M',2000000000,24000,0),
	('9283760794','Edson Meilelles','R. Pinto de Azevedo',' ','Cidade Nova','RJ','22002002','1995-10-07',27,'M',1500000000,25000,1),
	('94387575700','Walber Lontra','R. Cel. Almeida',' ','Piedade','RJ','22000201','1989-06-20',33,'M',600000000,12000,1),
	('95939180787','Fabio Carvalho','R. dos Jacarandas da Peninsula',' ','Barra da Tijuca','RJ','22002020','1992-01-05',31,'M',900000000,18000,1);

/* Adicionando vendedores */
INSERT INTO [vendedores] VALUES
	('00239', 'Kau� Bertaze', 1.00, '50997429801')

SELECT * FROM produtos
SELECT * FROM clientes
SELECT * FROM vendedores
