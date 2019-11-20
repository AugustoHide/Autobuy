<?php 

class anuncio 
{
	
	public $idAnuncio;
	public $idCliente;
	public $idVeiculo;
	public $descricao;
	public $dataPublicacao; 

	function __construct($idAnuncio,$idCliente,$idVeiculo,$descricao,$dataPublicacao)
	{

		$this->idAnuncio = $idAnuncio;
		$this->idCliente = $idCliente;
		$this->idVeiculo = $idVeiculo;
		$this->descricao = $descricao;
		$this->dataPublicacao = $dataPublicacao;
	}

}
 ?>