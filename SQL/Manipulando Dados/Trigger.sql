CREATE TABLE TAB_FATURAMENTO (
	DATA_VENDA DATE NULL,
	TOTAL_VENDA FLOAT
)

INSERT INTO VENDAS 
VALUES ('0106', '2018-05-16', '1471156710', '235', 0.18)
INSERT INTO ITENS_VENDIDOS 
VALUES ('0106', '1000889', 150, 10)

SELECT TV.DATA_VENDAS,
		SUM(TIV.QUANTIDADE * TIV.PRECO) AS TOTAL_VENDA
FROM VENDAS TV
	INNER JOIN ITENS_VENDIDOS TIV
		ON TV.NUMERO = TIV.NUMERO
GROUP BY TV.DATA_VENDAS


DELETE FROM TAB_FATURAMENTO
INSERT INTO TAB_FATURAMENTO
SELECT TV.DATA_VENDAS,
		SUM(TIV.QUANTIDADE * TIV.PRECO) AS [TOTAL_VENDA]
FROM VENDAS TV
	INNER JOIN ITENS_VENDIDOS TIV
		ON TV.NUMERO = TIV.NUMERO
GROUP BY TV.DATA_VENDAS

SELECT * FROM TAB_FATURAMENTO


------------------------------------------------------------------------------------------------------


-- Script para atualizar o total de vendas na tb de itens vendidos e mandar para a tb_faturamento
CREATE TRIGGER TG_ITENS_VENDIDOS
	ON [dbo].[ITENS_VENDIDOS]
AFTER INSERT, UPDATE, DELETE
AS
BEGIN
	DELETE FROM TAB_FATURAMENTO
	INSERT INTO TAB_FATURAMENTO
	SELECT TV.DATA_VENDAS,
			SUM(TIV.QUANTIDADE * TIV.PRECO) AS [TOTAL_VENDA]
	FROM VENDAS TV
		INNER JOIN ITENS_VENDIDOS TIV
			ON TV.NUMERO = TIV.NUMERO
	GROUP BY TV.DATA_VENDAS
END

SELECT * FROM VENDAS
SELECT * FROM ITENS_VENDIDOS
SELECT * FROM TAB_FATURAMENTO

------------------------------------------------------------------------------------------------------


SELECT [CPF], 
		[IDADE], 
		[DATA_NASCIMENTO]
FROM CLIENTES

-- Script para atualizar a idade na tb clientes
CREATE TRIGGER TG_CLIENTES_IDADE
	ON [CLIENTES]
AFTER INSERT, UPDATE, DELETE
AS
BEGIN
	UPDATE [CLIENTES] 
	SET [IDADE] = DATEDIFF(YEAR, [DATA_NASCIMENTO], GETDATE())
END