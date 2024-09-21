------------------------------ Funções de Data ------------------------------

SELECT	GETDATE() AS [DATA ATUAL],
		DATEADD(DAY, 10, GETDATE()) AS [DATA DAQUI 10 DIAS],
		DATEADD(MONTH, -2, GETDATE()) AS [DATA DE 2 MESES ATRAS]


SELECT	DATEDIFF(YEAR, '2004-11-17', GETDATE()) AS  [ANOS PASSADOS DESDE MEU NASCIMENTO],
		DATEPART(DAY, GETDATE()) AS [DIA DE HOJE],
		ISDATE(DATETIMEFROMPARTS(2020, 02, 29, 10, 20, 30, 00)) AS [VALIDANDO DATA]


/* DESAFIO */
SELECT	NOME, 
		CONCAT	( 'Nascimento: ',
					DATENAME(WEEKDAY, data_de_nascimento), ', ', 
					DATENAME(DAY, data_de_nascimento), ' de ',
					DATENAME(MONTH, data_de_nascimento), ' de ',
					DATENAME(YEAR, data_de_nascimento)
				) AS [DATA EXTENSA]
FROM TABELA_DE_CLIENTES