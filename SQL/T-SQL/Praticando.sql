DECLARE @CPF VARCHAR(11),
		@NOME VARCHAR(100),
		@NUMERO_CLIENTES INT,
		@I INT,
		@MES INT,
		@ANO INT,
		@TOTAL_VENDAS FLOAT
DECLARE @TABELA TABLE (
			CPF VARCHAR(11),
			NOME VARCHAR(100),
			MES INT,
			ANO INT,
			VALOR_TOTAL FLOAT
		)
SET @MES = 1
SET @ANO = 2015
SELECT @NUMERO_CLIENTES = COUNT(*)
FROM [TABELA DE CLIENTES]
SET @I = 1
WHILE @I <= @NUMERO_CLIENTES
	BEGIN 
		SELECT @CPF = X.CPF, @NOME = X.NOME
		FROM (
			SELECT ROW_NUMBER() OVER (ORDER BY CPF) AS RowNum, *
			FROM [TABELA DE CLIENTES]
		) X  
		WHERE X.RowNum = @I

		SELECT @TOTAL_VENDAS = SUM(INF.QUANTIDADE * INF.[PRE�O])
		FROM [NOTAS FISCAIS] NF
			INNER JOIN [ITENS NOTAS FISCAIS] INF
				ON NF.NUMERO = INF.NUMERO
		WHERE NF.CPF = @CPF
			AND YEAR(NF.DATA) = @ANO
			AND MONTH(NF.DATA) = @MES

		INSERT INTO @TABELA
		VALUES(@CPF, @NOME, @MES, @ANO, @TOTAL_VENDAS)
		--PRINT ('Vendas para ' + @CPF + ' - ' + @NOME + 'no m�s ' + 
		--		CONVERT(VARCHAR(2), @MES) + ' e ano ' + CONVERT(VARCHAR(4), @ANO) + 
		--		' foi de ' + TRIM(STR(@TOTAL_VENDAS, 15, 2)))
		SET @I = @I + 1
	END

SELECT * FROM @TABELA





/* Desafio */
DECLARE @CODIGO VARCHAR(10);
DECLARE @NOME VARCHAR(50);
DECLARE @NUMERO_PRODUTOS INT;
DECLARE @I INT;
DECLARE @MES INT, @ANO INT;
DECLARE @TOTAL_VENDAS FLOAT;

SET @MES = 1;
SET @ANO = 2015;
SELECT @NUMERO_PRODUTOS = COUNT(*) FROM [TABELA DE PRODUTOS];
SET @I = 1;
WHILE @I <= @NUMERO_PRODUTOS
BEGIN
   SELECT @CODIGO = X.[CODIGO DO PRODUTO], @NOME = X.[NOME DO PRODUTO]
   FROM ( SELECT Row_Number() Over (Order By [CODIGO DO PRODUTO]) as RowNum, * from [TABELA DE PRODUTOS]) X
   WHERE X.RowNum = @I;

   SELECT @TOTAL_VENDAS = SUM([ITENS NOTAS FISCAIS].QUANTIDADE * [ITENS NOTAS FISCAIS].[PRE�O]) 
   FROM [NOTAS FISCAIS]
   INNER JOIN [ITENS NOTAS FISCAIS] 
   ON [NOTAS FISCAIS].NUMERO = [ITENS NOTAS FISCAIS].NUMERO
   WHERE  [ITENS NOTAS FISCAIS].[CODIGO DO PRODUTO] = @CODIGO
   AND YEAR([NOTAS FISCAIS].DATA) = @ANO AND MONTH([NOTAS FISCAIS].DATA) = @MES;

   PRINT 'Vendas para ' + @CODIGO + ' - ' + @NOME + ' NO M�S ' + CONVERT(VARCHAR(2), @MES) + ' E ANO ' + CONVERT(VARCHAR(4), @ANO) + ' FOI DE ' +  CONVERT(VARCHAR(20), @TOTAL_VENDAS);
   SET @I = @I + 1;
END;