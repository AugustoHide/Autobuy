<nav class="navbar navbar-default cabecalho ">
  <div class="container ">

    <div class="navbar-header ">
      <a href="index.php" class="navbar-brand">LOGP</a>
    </div>
    
    <ul class="nav ">
      <li>
        <a class="nav-link" href="index.php?action=comprar">Comprar</a>
      </li>
      <li >
        <a class="nav-link" href="index.php?action=vender">Vender</a>
      </li>
      <span class=" nav-link dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vender</a>
        <div class="linkdropdown dropdown-menu">
          <a href="#">Gerenciar meu anúncio</a>
        </div>
      </span>
      <li>
        <a class="nav-link" href="index.php?action=financiamento">Financiamento (FNF)</a>
      </li>
      <li>
        <a class="nav-link" href="#">Busca Detalhada</a>
      </li>
      <span class="nav-link dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login</a>
        <form method="post" class="dropdown-menu">
          <input type="text" name="login" class="form-control" placeholder="Digite seu login">
          <input type="text" name="senha" class="form-control" placeholder="Digite sua senha">
          <button type="submit" class="btn-primary">Logar</button>
        </form> 
      </span>
    </ul>
  </div>
</nav>


