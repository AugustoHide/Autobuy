<?php
switch ($_SESSION['status']) {
    case 0:
        echo 'SUCESSO';
        break;
    case 1:
        echo 'PREENCHA OS CAMPOS';
        break;
    case 2:
        echo 'ERRO DE SQL';
        break;
    case 3:
        echo 'JA EXISTE';
        break;
    case 4:
        echo 'Removido com sucesso';
        break;
    case 5:
        echo 'Nome mudado com sucesso';
        break;
    default:
        break;

} ?>
<br><a href="index.php?action=cadastrar">Voltar ao cadastro</a>
<br><a href="index.php?action=listar">Ver lista</a>