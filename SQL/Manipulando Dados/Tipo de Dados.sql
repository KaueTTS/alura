/*

== Tipos de Dados Num�ricos ==
	
	1. Inteiros
		bit: Valores de 0 ou 1.
		tinyint: N�meros inteiros de 0 a 255.
		smallint: N�meros inteiros de -32.768 a 32.767.
		int: N�meros inteiros de -2.147.483.648 a 2.147.483.647.
		bigint: N�meros inteiros de -9.223.372.036.854.775.808 a 9.223.372.036.854.775.807.

	2. Precis�o Exata
		decimal(p, s) ou numeric(p, s): N�meros fixos com precis�o definida. p � a precis�o (n�mero total de d�gitos) e s � a escala (n�mero de d�gitos � direita do ponto decimal).
		money: Valores monet�rios de -922.337.203.685.477.5808 a 922.337.203.685.477.5807.
		smallmoney: Valores monet�rios de -214.748.3648 a 214.748.3647.

	3. Precis�o Aproximada
		float(n): N�meros de ponto flutuante. n define a precis�o.
		real: N�meros de ponto flutuante com menor precis�o.


== Tipos de Dados de Data e Hora ==

		date: Apenas data (anos, meses, dias).
		time: Apenas hora (horas, minutos, segundos).
		datetime: Data e hora combinadas, de 1753-01-01 a 9999-12-31, com precis�o de 3.33 ms.
		smalldatetime: Data e hora combinadas, de 1900-01-01 a 2079-06-06, com precis�o de 1 minuto.
		datetime2: Data e hora combinadas, de 0001-01-01 a 9999-12-31, com precis�o de 100 nanossegundos.
		datetimeoffset: Como datetime2, mas com um fuso hor�rio adicional.
		timestamp ou rowversion: Uma marca temporal �nica para uma linha de tabela, n�o relacionada a data e hora.


== Tipos de Dados de Cadeia de Caracteres ==

	1. Cadeias de Caracteres N�o Unicode
		char(n): Cadeia de caracteres de tamanho fixo, at� 8.000 caracteres.
		varchar(n): Cadeia de caracteres de tamanho vari�vel, at� 8.000 caracteres.
		varchar(max): Cadeia de caracteres de tamanho vari�vel, at� 2^31-1 caracteres.

	2. Cadeias de Caracteres Unicode
		nchar(n): Cadeia de caracteres Unicode de tamanho fixo, at� 4.000 caracteres.
		nvarchar(n): Cadeia de caracteres Unicode de tamanho vari�vel, at� 4.000 caracteres.
		nvarchar(max): Cadeia de caracteres Unicode de tamanho vari�vel, at� 2^31-1 caracteres.


== Tipos de Dados Bin�rios ==

		binary(n): Dados bin�rios de tamanho fixo, at� 8.000 bytes.
		varbinary(n): Dados bin�rios de tamanho vari�vel, at� 8.000 bytes.
		varbinary(max): Dados bin�rios de tamanho vari�vel, at� 2^31-1 bytes.


== Tipos de Dados Especiais ==

		uniqueidentifier: Um identificador global �nico (GUID).
		xml: Dados XML.
		cursor: Um cursor de banco de dados.
		sql_variant: Pode armazenar valores de diferentes tipos de dados, exceto text, ntext, timestamp e sql_variant.
		table: Uma vari�vel de tipo de tabela usada para armazenar um conjunto de resultados tempor�rios.


== Tipos de Dados de Texto e Imagem (descontinuados) ==
 
		text: Dados de texto de at� 2^31-1 caracteres (substitu�do por varchar(max)).
		ntext: Dados de texto Unicode de at� 2^30-1 caracteres (substitu�do por nvarchar(max)).
		image: Dados bin�rios de at� 2^31-1 bytes (substitu�do por varbinary(max)).

*/