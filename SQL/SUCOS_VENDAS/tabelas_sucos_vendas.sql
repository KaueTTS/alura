/* Para excluir tabelas utilize o comando --> DROP TABLE */

CREATE TABLE [clientes] (

	[CPF] [CHAR] (11),
	[NOME] [VARCHAR] (150),
	[RUA] [VARCHAR] (150),
	[COMPLEMENTO] [VARCHAR] (150),
	[BAIRRO] [VARCHAR] (150),
	[ESTADO] [CHAR] (2),
	[CEP] [CHAR] (8), 
	[NASCIMENTO] [DATE],
	[IDADE] [SMALLINT],
	[SEXO] [CHAR] (1),
	[LIMIT_CREDITO] [MONEY],
	[VOL_MIN] [FLOAT],
	[PRIMEIRA_COMPRA] [BIT]

)

CREATE TABLE [produtos] (

	[COD_PRODUTO] [VARCHAR] (20) NOT NULL PRIMARY KEY,
	[NOME_PRODUTO] [VARCHAR] (50),
	[EMBALAGEM] [VARCHAR] (50),
	[TAMANHO] [VARCHAR] (50),
	[SABOR] [VARCHAR] (50),
	[PRECO_LISTA] [SMALLMONEY]

)

CREATE TABLE [vendedores] (

	[MATRICULA] [VARCHAR] (5) NOT NULL PRIMARY KEY,
	[NOME] [VARCHAR] (100),
	[PORCEN_COMISSAO] [float]

)

ALTER TABLE [CLIENTES] 
ALTER COLUMN [CPF] [CHAR] (11) NOT NULL

ALTER TABLE [CLIENTES] 
ADD CONSTRAINT PK_TABELA_CLIENTE
PRIMARY KEY CLUSTERED ([CPF])

ALTER TABLE [vendedores]
ADD [CPF] [CHAR] (11)

DROP TABLE [vendedores]

/*
Numéricos exatos		números de vários tamanhos que podem ser formatados		9.78 pode ser definida como decimal(3,2)					bigint, int, smallint,tinyint, decimal(i,j), numeric(i,j)
Unidades monetárias		valores que representam dinheiro						685477.58 é saldo da conta bancária definida do tipo		money	money, smallmoney
Numéricos aproximados	números de ponto flutuante com precisão					7.90 é do tipo float										float ou real
Cadeias de caracteres	Textos de tamanhos fixos								“modelagem” se encaixa em varchar(9)						char(n)
						Texto de tamanho variável																							varchar(n)
Valores lógicos			Termos que representa verdadeiro ou falso																			bit
Datas					Datas, dias, mês, anos.									Calendário lunar, calendário comercial						date AAAA-MM-DD, Smalldate, Datetimeoffset
						Tempo													10:59:13 é tipo time										time, datetime
						*/