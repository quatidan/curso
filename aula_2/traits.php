<?php

trait Operacoes
{
	public function somar(float ...$valores)
	{
		$total = 0;

		foreach ($valores as $valor){
			$total += $valor;
		}

		return $total;
	}
	public function subtrair(float $a, float $b)
	{
		return $a $b;
	}
}

class Calculadora
{
	use Operacoes;
}

$c = new Calculadora();

echo $c->somar(1,2,3,4,5,6);
echo'<br>';
echo $c->subtrair(1,2,3,4,5,6);