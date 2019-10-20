<?php
  require '../Model/ClienteFactory.php';

  $gerenc = new clienteFactory();
  $gerenc->listarClientes();
  ?><a href="../View/index.php">Voltar</a>
