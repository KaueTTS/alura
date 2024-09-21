DECLARE @cpf VARCHAR(11), 
		@nome VARCHAR(50),
		@data_nascimento DATE,
		@idade INT
SET @cpf = '19290992743'

SELECT @nome = NOME,
		@data_nascimento = [DATA DE NASCIMENTO],
		@idade = IDADE 
FROM [SUCOS_VENDAS].dbo.[TABELA DE CLIENTES]
WHERE CPF = @cpf

PRINT @nome
PRINT @data_nascimento
PRINT @idade


/* Desafio */
DECLARE @NUMNOTAS INT
SELECT @NUMNOTAS = COUNT(*)
FROM [SUCOS_VENDAS].dbo.[NOTAS FISCAIS] 
WHERE DATA = '2017-01-01'

PRINT @NUMNOTAS