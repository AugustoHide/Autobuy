<?php 
class veiculo
{
	
	public $idVeiculo;
	public $marca;
	public $ano;
	public $cor;
	public $quilometragem;
	public $categoria;
	public $tipo; 
	function __construct($idVeiculo, $marca, $ano, $cor, $quilometragem,$categoria,$tipo)
	{
		$this->idVeiculo = $idVeiculo;
		$this->marca = $marca;
		$this->ano = $ano;
		$this->cor = $cor;
		$this->quilometragem = $quilometragem;
		$this->categoria = $categoria;
		$this->tipo = $tipo;
	}
}
 ?>