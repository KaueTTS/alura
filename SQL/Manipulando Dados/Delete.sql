SELECT * FROM [PRODUTOS]
WHERE SUBSTRING([DESCRITOR], 1, 15) = 'Sabor dos Alpes'

DELETE FROM  PRODUTOS
WHERE SUBSTRING([DESCRITOR], 1, 15) = 'Sabor dos Alpes'
	AND TAMANHO = '1 Litro'



SELECT * 
FROM PRODUTOS
WHERE CODIGO NOT IN (SELECT CODIGO_DO_PRODUTO FROM SUCOS_FRUTAS.dbo.TABELA_DE_PRODUTOS)

DELETE FROM  PRODUTOS
WHERE CODIGO NOT IN (SELECT CODIGO_DO_PRODUTO FROM SUCOS_FRUTAS.dbo.TABELA_DE_PRODUTOS)




SELECT NF.NUMERO, 
		CL.NOME,
		CL.CPF 
FROM [SUCOS_FRUTAS].dbo.[NOTAS_FISCAIS] NF
	INNER JOIN [CLIENTES] CL
		ON NF.CPF = CL.CPF
WHERE CL.[IDADE] < 18

DELETE NF FROM [SUCOS_FRUTAS].dbo.[NOTAS_FISCAIS] NF
	INNER JOIN [CLIENTES] CL
		ON NF.CPF = CL.CPF
WHERE CL.[IDADE] < 18