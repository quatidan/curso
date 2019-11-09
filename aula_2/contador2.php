<?php

$hino = <<<HINO
Salve o tricolor paulista
Amado clube brasileiro
Tu es forte, tu es grande
Dentre os grandes es o primeiro!
Tu és forte, tu es grande
Dentre os grandes és o primeiro!
O tricolor
Clube bem amado
As tuas glorias
Vêm do passado!!!
O tricolor
Clube bem amado
As tuas glorias
Vem do passado!!!
Sao teus guias brasileiros
Que te amam ternamente
De Sao Paulo tens o nome
Que ostentas dignamente!
De Sao Paulo tens o nome
Que ostentas dignamente!
O tricolor
Clube bem amado
As tuas glorias
Vem do passado!
O tricolor
Clube bem amado
As tuas glorias
Vem do passado!
Tuas cores gloriosas
Despertam um amor febril
Pela terra bandeirantes
Honra e gloria do Brasil
Pela terra bandeirante
Honra e gloria do Brasil
O tricolor
Clube bem amado
As tuas glorias
Vem do passado
O tricolor
Clube bem amado
As tuas glorias
Vem do passado
Trazes glorias luminosas
Do paulista imortal
Da floresta tambem trazes
Um brilho tradicional
Da floresta tambem trazes
Um brilho tradicional
O tricolor
Clube bem amado
As tuas glorias
Vem do passado
O tricolor
Clube bem amado
As tuas glorias
Vem do passado
Sao Paulo clube querido
Tu tens o nosso amor
Teu nome e as tuas glorias
Tem honra e resplendor
Teu nome e as tuas glórias
Tem honra e resplendor
O tricolor
Clube bem amado
As tuas glorias
Vem do passado
O tricolor
Clube bem amado
As tuas glorias
Vem do passado
HINO;

const VOGAIS = [ 'a', 'e', 'i', 'o', 'u' ];

class ContadorDeVogais implements Countable
{
	private $text;

	public function __construct($text)
	{
		$this->text = $text;
	}

	public function count(): int
	{
		$contagem = 0;

		for ($i = 0; $i < strlen($this->text); $i++) 
		{
			$c = strtolower($this->text[$i]);

			if (in_array($c, VOGAIS)) {
				$contagem += 1;
			}
		}

		return $contagem;
	}
}

echo count(new ContadorDeVogais($hino));	