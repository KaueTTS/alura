/*

== Tipos de Dados Numéricos ==
	
	1. Inteiros
		bit: Valores de 0 ou 1.
		tinyint: Números inteiros de 0 a 255.
		smallint: Números inteiros de -32.768 a 32.767.
		int: Números inteiros de -2.147.483.648 a 2.147.483.647.
		bigint: Números inteiros de -9.223.372.036.854.775.808 a 9.223.372.036.854.775.807.

	2. Precisão Exata
		decimal(p, s) ou numeric(p, s): Números fixos com precisão definida. p é a precisão (número total de dígitos) e s é a escala (número de dígitos à direita do ponto decimal).
		money: Valores monetários de -922.337.203.685.477.5808 a 922.337.203.685.477.5807.
		smallmoney: Valores monetários de -214.748.3648 a 214.748.3647.

	3. Precisão Aproximada
		float(n): Números de ponto flutuante. n define a precisão.
		real: Números de ponto flutuante com menor precisão.


== Tipos de Dados de Data e Hora ==

		date: Apenas data (anos, meses, dias).
		time: Apenas hora (horas, minutos, segundos).
		datetime: Data e hora combinadas, de 1753-01-01 a 9999-12-31, com precisão de 3.33 ms.
		smalldatetime: Data e hora combinadas, de 1900-01-01 a 2079-06-06, com precisão de 1 minuto.
		datetime2: Data e hora combinadas, de 0001-01-01 a 9999-12-31, com precisão de 100 nanossegundos.
		datetimeoffset: Como datetime2, mas com um fuso horário adicional.
		timestamp ou rowversion: Uma marca temporal única para uma linha de tabela, não relacionada a data e hora.


== Tipos de Dados de Cadeia de Caracteres ==

	1. Cadeias de Caracteres Não Unicode
		char(n): Cadeia de caracteres de tamanho fixo, até 8.000 caracteres.
		varchar(n): Cadeia de caracteres de tamanho variável, até 8.000 caracteres.
		varchar(max): Cadeia de caracteres de tamanho variável, até 2^31-1 caracteres.

	2. Cadeias de Caracteres Unicode
		nchar(n): Cadeia de caracteres Unicode de tamanho fixo, até 4.000 caracteres.
		nvarchar(n): Cadeia de caracteres Unicode de tamanho variável, até 4.000 caracteres.
		nvarchar(max): Cadeia de caracteres Unicode de tamanho variável, até 2^31-1 caracteres.


== Tipos de Dados Binários ==

		binary(n): Dados binários de tamanho fixo, até 8.000 bytes.
		varbinary(n): Dados binários de tamanho variável, até 8.000 bytes.
		varbinary(max): Dados binários de tamanho variável, até 2^31-1 bytes.


== Tipos de Dados Especiais ==

		uniqueidentifier: Um identificador global único (GUID).
		xml: Dados XML.
		cursor: Um cursor de banco de dados.
		sql_variant: Pode armazenar valores de diferentes tipos de dados, exceto text, ntext, timestamp e sql_variant.
		table: Uma variável de tipo de tabela usada para armazenar um conjunto de resultados temporários.


== Tipos de Dados de Texto e Imagem (descontinuados) ==
 
		text: Dados de texto de até 2^31-1 caracteres (substituído por varchar(max)).
		ntext: Dados de texto Unicode de até 2^30-1 caracteres (substituído por nvarchar(max)).
		image: Dados binários de até 2^31-1 bytes (substituído por varbinary(max)).

*/