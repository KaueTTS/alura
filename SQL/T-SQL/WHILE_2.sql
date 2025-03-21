DECLARE @LIMIT_MIN INT,
		@LIMIT_MAX INT,
		@NUM_LINHAS_MAX INT,
		@NUM_LINHAS_ESCRITAS INT
SET @LIMIT_MIN = 1
SET @LIMIT_MAX = 20
SET @NUM_LINHAS_MAX = 10
SET @NUM_LINHAS_ESCRITAS = 0

PRINT 'ENTRE NO LOOPING'

WHILE @LIMIT_MIN <= @LIMIT_MAX

	BEGIN
		PRINT @LIMIT_MIN
		SET @NUM_LINHAS_ESCRITAS = @NUM_LINHAS_ESCRITAS + 1

			IF @NUM_LINHAS_ESCRITAS = @NUM_LINHAS_MAX
				BEGIN
					PRINT 'SAI DO LOOPING POR CAUSA DO BREAK'
					BREAK
				END

		SET @LIMIT_MIN = @LIMIT_MIN + 1
	END

	PRINT 'SAI DO LOOPING'



/* Desafio */
DECLARE @NUMERO_ANTERIOR2 INT;
DECLARE @NUMERO_ANTERIOR1 INT;
DECLARE @NUMERO_ATUAL INT;
DECLARE @SEQUENCIA INT;
DECLARE @CONTADOR_SEQUENCIA INT;

SET @SEQUENCIA = 44;
SET @CONTADOR_SEQUENCIA = 3;
SET @NUMERO_ANTERIOR2 = 0;
SET @NUMERO_ANTERIOR1 = 1;

PRINT 'POSI��O 1 --> 0';
PRINT 'POSI��O 2 --> 1';

WHILE @CONTADOR_SEQUENCIA <= @SEQUENCIA
	BEGIN
	   SET @NUMERO_ATUAL = @NUMERO_ANTERIOR2 + @NUMERO_ANTERIOR1;
	   PRINT 'POSI��O ' + TRIM(STR(@CONTADOR_SEQUENCIA,10,0)) + ' --> ' + TRIM(STR(@NUMERO_ATUAL, 10,0));
	   SET  @NUMERO_ANTERIOR2 = @NUMERO_ANTERIOR1;
	   SET @NUMERO_ANTERIOR1 = @NUMERO_ATUAL;
	   SET @CONTADOR_SEQUENCIA = @CONTADOR_SEQUENCIA + 1;
	END;