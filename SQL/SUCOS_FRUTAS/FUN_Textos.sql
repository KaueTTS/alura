------------------------------ Funções de Texto ------------------------------

SELECT	nome, 
		LOWER(nome) AS nome_minusculo,
		UPPER(nome) AS nome_maiusculo
FROM tabela_de_clientes


SELECT	nome, 
		CONCAT(endereco_1, ', ', bairro, ', ', cidade, '/', estado, ' - ', cep) AS endereco_completo
FROM tabela_de_clientes


SELECT	embalagem, 
		LEFT(embalagem, 1) AS cod_embalagem,
		codigo_do_produto,
		RIGHT(codigo_do_produto, 4) AS final_cod_produto
FROM tabela_de_produtos


SELECT	tamanho, 
		REPLACE((REPLACE(tamanho, 'Litros', 'L')), 'Litro', 'L') AS tamanho_ajustado
FROM tabela_de_produtos


/* DESAFIO */
SELECT	NOME, 
		CHARINDEX(' ', NOME, 1) AS quantidade_char_nome,
		SUBSTRING(NOME, 1, CHARINDEX(' ', NOME, 1)) AS primeiro_nome
FROM TABELA_DE_CLIENTES

