DECLARE @matricula VARCHAR(5),
		@nome VARCHAR(100),
		@percentual FLOAT,
		@data DATE,
		@ferias BIT,
		@bairro VARCHAR(50)
SET @matricula = '00240'
SET	@nome = 'Cláudia Rodrigues'
SET @percentual = 0.10
SET @data = '2012-03-12'
SET @ferias = 1
SET @bairro = 'Jardins'
PRINT @matricula 
PRINT @nome
PRINT @percentual
PRINT @data
PRINT @ferias
PRINT @bairro

INSERT INTO [SUCOS_VENDAS].dbo.[TABELA DE VENDEDORES]
(MATRICULA, NOME, [PERCENTUAL COMISSÃO], [DATA ADMISSÃO], [DE FERIAS], BAIRRO)
VALUES
(@matricula, @nome, @percentual, @data, @ferias, @bairro)

PRINT 'Um vendedor incluído'

SELECT * FROM [SUCOS_VENDAS].dbo.[TABELA DE VENDEDORES]



/* Desafio */
DECLARE @cliente VARCHAR(10),
		@cpf VARCHAR(50),
		@idade INT,
		@dataNascimento DATE,
		@custo FLOAT
SET @cliente = 'João'
SET @cpf = '19290992743'
SET @idade = 10
SET @dataNascimento = '2007-01-10'
SET @custo = 10.23

