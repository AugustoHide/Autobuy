<?php
session_start();
require 'Model/Cliente.php';
require 'Model/factory.php';

$_GET['insertstatus'] = null;

class controler
{
    
    private $factory;

    public function __construct()
    {
        $this->factory = new factory();
        $this->handleRequest();
    }

    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : '';

        switch ($action) {
            // só para testes
            case 'cadastrar':
                require 'View/login.php';
                break;
            // teste
            case 'cadastrar2':
                require 'View/novoVeiculo.php';
                break;

            case 'criar-anuncio':
                require 'View/novoAnuncio.php';
                break;
            // teste
            case 'realizar-cadastro':
                if (trim($_POST['emailCliente']) == '' || trim($_POST['nomeCliente']) == '') {
                    $_SESSION['status'] = 1;
                } else {
                    $cliente = new cliente($_POST['nomeCliente'], $_POST['emailCliente']);
                    //addStatus é o int que o addCliente retorna indicando cod de erro ou sucesso
                    // certo = 0 vazio = 1 sql = 2 ja existe = 3
                    $_SESSION['status'] = $this->factory->addClientes($cliente);
                }
                require 'View/erros.php';
                break;

            case 'cadastro-veiculo':
                break;

            case 'listar':
                $this->factory->listarClientes();
                break;

            case 'editar':

                $_SESSION['id'] = $_GET['id'];
                require 'View/editar.php';
                break;

            case 'alterar':
                $_SESSION['status'] = $this->factory->alterarClientes();
                require 'View/erros.php';
                break;
            case 'remover':
                $_SESSION['id'] = $_GET['id'];
                $_SESSION['status'] = $this->factory->removerClientes();
                require 'View/erros.php';
                break;
            default:
                require 'View/paginaPrincipal.php';
                break;
        }

    }
}

