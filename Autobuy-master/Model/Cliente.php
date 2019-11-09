<?php 

class cliente 
{
	
	public $nome;
	public $email;
	public $cpf;
	public $endereco;
	public $idLogin; 
	 // idLogin pra testes 
	function __construct($email,$nome,$cpf,$endereco)
	{

		$this->email = $email;
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->endereco = $endereco;
	}

}
 ?>