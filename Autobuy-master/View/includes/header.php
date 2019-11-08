  <!-- TRABALHAR AQUI ATÉ CONSEGUIR FAZER ACESSO DE USUÁRIO -->

    <link rel="stylesheet" type="text/css" href="View/css/estilo.css">
    <nav class="navbar navbar-default cabecalho ">
    
      <div class="container ">

        <div class="navbar-header ">
          <a href="index.php" class="navbar-brand">LOGP</a>
        </div>

        
        <ul class="nav ">
          <li>
            <a class="nav-link" href="#">Comprar</a>
          </li>
          <span class=" nav-link dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vender</a>
            <div  class="dropdown-menu">
              <a id="linkdropdown" href="#">Gerenciar meu anúncio</a>
            </div>
          </span>
          <li>
            <a class="nav-link" href="#">Financiamento (FNF)</a>
          </li>
          <li>
            <a class="nav-link" href="#">Busca Detalhada</a>
          </li>
    <?php
    $_SESSION['usuario'] = "Filipe";
      if (isset($_SESSION['usuario'])) {
        $user = $_SESSION['usuario'];
        ?>
        <li><a class="nav-link" href="index.php?action=usuario"><?php echo $user['nome']; ?></a></li>
        <li><a class="nav-link" href="index.php?action=sair">sair</a></li>
        <?php }else{ ?>
          <li class="nav-link">|</li>

          <li>
            <a href="index.php?action=cadastrar" class="nav-link">Cadastrar</a>
          </li>
          <li>

          <a href="index.php?action=logar" class="nav-link">Logar</a>
        
<?php }?>
          </li>
        </ul>
      </div>
    </nav>


