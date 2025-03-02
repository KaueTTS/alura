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

# O QUE APRENDEMOS