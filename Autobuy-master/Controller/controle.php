<?php
session_start();
require 'Model/Cliente.php';
require 'Model/ClienteFactory.php';

$_GET['insertstatus'] = null;

class controler
{
    
    private $clienteFactory;

    public function __construct()
    {
        $this->clienteFactory = new clienteFactory();
        $this->handleRequest();
    }

    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : '';

        switch ($action) {

            case 'cadastrar':
                require 'View/novo.php';
                break;

            case 'realizar-cadastro':
                if (trim($_POST['emailCliente']) == '' || trim($_POST['nomeCliente']) == '') {
                    $_SESSION['status'] = 1;
                } else {
                    $cliente = new cliente($_POST['nomeCliente'], $_POST['emailCliente']);
//                    addStatus é o int que o addCliente retorna indicando cod de erro ou sucesso
                    // certo = 0 vazio = 1 sql = 2 ja existe = 3
                    $_SESSION['status'] = $this->clienteFactory->addClientes($cliente);
                }
                require 'View/mostra.php';
                break;
            case 'listar':
                $this->clienteFactory->listarClientes();
                break;

            case 'editar':

                $_SESSION['id'] = $_GET['id'];
                require 'View/editar.php';
                break;

            case 'alterar':
                $_SESSION['status'] = $this->clienteFactory->alterarClientes();
                require 'View/mostra.php';
                break;
            case 'remover':
                $_SESSION['id'] = $_GET['id'];
                $_SESSION['status'] = $this->clienteFactory->removerClientes();
                require 'View/mostra.php';
                break;
            default:
                require 'View/paginaPrincipal.php';
                break;
        }

    }
}

