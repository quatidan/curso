<?php

$res = file_get_contents('https://gen-net.herokuapp.com/api/users');
$res = json_decode($res, true);

class IteradorOrdemAlfabetica implements Iterator
{
	private $lista;
	private $currentIndex;

	public function __construct($lista, $chave, $ordem)
	{
		$this->lista = $lista;
		
		usort($this->lista, function($a, $b) use ($chave, $ordem) {
			if ($ordem) {
				return $a[$chave] > $b[$chave];
			} else {
				return $a[$chave] < $b[$chave];
			}
		});

		foreach ($this->lista as $o) {
			echo $o['id'] . '<br>';
		}
	}

	public function rewind()
	{
		$this->currentIndex = 0;
	}

	public function current()
	{
		return $this->lista[$this->currentIndex];
	}

	public function key()
	{
		return $this->currentIndex;
	}

	public function next()
	{
		$this->currentIndex += 1;
	}

	public function valid()
	{
		return $this->currentIndex < count($this->lista);
	}
}
$it = new IteradorOrdemAlfabetica($res, 'email', false)

	foreach ($it as $k => $v){
		echo $k  ' => '  $v['email'  '<br>'];
	}

class TabelaDeUsuarios implements IteratorAggregate
{
	private $lista;
	public function __construct($lista)
	{
		$this
	}
}

