<?php
session_start();

require 'Model/factory.php';
require 'Model/cliente.php';
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
            case 'usuario':
                require 'View/paginaUsuario.php';
                break;
            case 'comprar':
                require 'View/paginaCompras.php';
                break;
            case 'vender':
                require 'View/paginaVendas.php';
                break;
            case 'financiamento':
                require 'View/paginaFinanciamento.php';
                break;
            case 'listar-anuncio':
                    require 'View/paginaListaAnuncio.php';
                    break;

            // só para testes
            case 'logar':
                require 'View/paginaLogin.php';
                break;
            case 'sair':
                require 'View/logout.php';
                break;
            case 'cadastrar':
                require 'View/paginaCadastro.php';
                break;
            // teste

            case 'realizar-cadastro':
                if (!isset($_POST['email'],$_POST['nomeCliente'],$_POST['cpf'],$_POST['endereco'],$_POST['senha'])) {
                    $_SESSION['status'] = 1;
                } else {
                    $cliente = new cliente($_POST['email'],$_POST['nomeCliente'],$_POST['cpf'],$_POST['endereco'],$_POST['senha']);
                    $_SESSION['status'] = $this->factory->addClientes($cliente);
                }
                require 'View/erros.php';
                break;

            case 'realizar-login':

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                   
                    if (isset($_POST['email']) && isset($_POST['senha'])) {
                        $usuario = $this->factory->logar($_POST['email'], $_POST['senha']);
                        if (isset($usuario)) {
                            $_SESSION['usuario'] = $usuario;
                            header("Location: index.php");
                            exit();
                        }else{
                            $_SESSION['status'] = 6;
                        }
                    }else{
                        $_SESSION['status'] = 6;
                    }
                }else{
                    if (isset($_SESSION['usuario'])) {
                        echo 'ola else if ';
                        echo '<div class=\'center-align\'><i class=\'large material-icons teal-text\'>arrow_upward</i></div>';
                      die();
                    }
                    $_SESSION['status'] = 6;
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

