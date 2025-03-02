# [ Aula 1 ]
## Resumo da Aula: Avaliação negativa

Aprendemos a lançar exceções personalizadas no PHP usando a palavra-chave ``throw``. Isso é útil quando queremos impedir que certas ações inválidas sejam realizadas, como tentar avaliar um episódio com uma nota negativa ou maior que 10.

Criamos uma validação no método ``avalia()`` da trait ``ComAvaliacao`` para verificar se a nota está entre 0 e 10. Caso contrário, lançamos uma ``InvalidArgumentException`` com uma mensagem explicativa.

```php
public function avalia(float $nota): void
{
    if ($nota < 0 || $nota > 10) {
        throw new \InvalidArgumentException('Nota precisa ser entre 0 e 10');
    }

    $this->notas[] = $nota;
}
```

Adicionamos um bloco de documentação (``doc block``) ao método ``avalia()`` para informar que ele pode lançar uma ``InvalidArgumentException`` se a nota for inválida.

```php
/**
 * @throws \InvalidArgumentException Se a nota for negativa ou maior do que 10
 */
public function avalia(float $nota): void
{
    // ...
}
```

Aprendemos a tratar as exceções lançadas usando um bloco ``try-catch``. No arquivo ``erro.php``, envolvemos a chamada do método ``avalia()`` em um bloco ``try`` e capturamos qualquer ``Exception`` que possa ser lançada no bloco ``catch``.

```php
try {
    $episodio->avalia(45);
    $episodio->avalia(-35);

    $conversor = new ConversorNotaEstrela();
    echo $conversor->converte($episodio);
} catch (Exception $e) {
    echo "Um problema aconteceu: " . $e->getMessage();
}
```

Discutimos sobre o gerenciamento de namespaces e a necessidade de usar a contrabarra (``\``) antes do nome da exceção quando ela está em um namespace diferente do arquivo atual.
<br>

# [ Aula 2 ]
## Resumo da Aula: Criando nossa exceção

1. Exceções Personalizadas
    Quando temos vários cenários em que uma exceção ``InvalidArgumentException`` pode ser lançada, é melhor criar exceções personalizadas para cada caso.
    Criamos uma nova exceção chamada ``NotaInvalidaException`` que herda de ``InvalidArgumentException``.

2. Construtor Personalizado
    No método ``avalia()`` do trait ``ComAvaliacao``, lançamos a exceção ``NotaInvalidaException`` ao invés de ``InvalidArgumentException``.

3. Tratando a Exceção Personalizada
    Para tratar a exceção, usamos um bloco ``try/catch`` e capturamos a ``NotaInvalidaException``.

4. Construtor Personalizado
    Adicionamos um construtor personalizado à ``NotaInvalidaException`` para definir a mensagem padrão da exceção, evitando repetir a mesma mensagem em vários lugares do código.
<br>

# O QUE APRENDEMOS

- Aprendemos a utilizar a instrução throw para lançar exceções;
- Conhecemos a hierarquia de classes de exceções, conhecendo classes como Exception, Error e a interface Throwable;
- Aprendemos a criar nossa própria classe de exceção que precisa estender Exception direta ou indiretamente.