<?php 

class veiculo 
{
	public $foto;
	public $marca;
	public $ano;
	public $km;
	public $cor;
	public $preco;
	

	function __construct($foto,$marca,$ano,$km,$cor,$preco){
		$this->foto = $foto;
		$this->marca = $marca;
		$this->ano = $ano;
		$this->km = $km;
		$this->cor = $cor;
		$this->preco = $preco;
	}
}

 ?>