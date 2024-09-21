------------------------------ Funções Numéricas ------------------------------

SELECT	ROUND(3.438, 2) [Arredonda a quantidade de decimais (2)], 
		ROUND(3.433, 3) [Arredonda a quantidade de decimais (3)]


SELECT	CEILING(3.433) [Arredonda sempre pra cima],
		FLOOR(3.433) [Arredonda sempre pra baixo]

SELECT	POWER(10, 6) [X numero elevado a Y numero],
		EXP(3) [Valor Exponencial],
		SQRT(144) [Raíz Quadrada],
		ABS(-10) [Retorna o valor Absoluto]

/* DESAFIO */
SELECT	YEAR(NF.DATA_VENDA) [ANO],
		FLOOR(SUM(IMPOSTO * (QUANTIDADE * PRECO))) [IMPOSTO]
FROM NOTAS_FISCAIS [NF]
		INNER JOIN ITENS_NOTAS_FISCAIS [INF] ON NF.NUMERO = INF.NUMERO 
WHERE YEAR(NF.DATA_VENDA) = 2016
GROUP BY YEAR(NF.DATA_VENDA)