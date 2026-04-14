<header>
  <?php
  /* mesma coisa que o uses do delphi ou lazarus (ALT+F11)*/

  require './controle/conexao.php';

  /*FDQuery de Delphi ou ZQuery do Lazarus- conectamos a Query*/

  $pdo = Conexao::conectar();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "select * from categorias;";/*propriedade slq da query do Delphi /Lazarus*/
  $prp = $pdo->prepare($sql);/*seria o principio logico de preparação do execsql ou open da query no Delphi /Lazarus*/
  $prp->execute();/*execsql ou open da query no Delphi /Lazarus*/

  ?>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Logo da Lojinha </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Inicial</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu">
              <?php while ($data = $prp->fetch(PDO::FETCH_ASSOC)) {/*data é igual a datasoure do Delphi/ Lazarus*/ ?>
                <li><a class="dropdown-item" href="ListarProdutos.php?op=cat&id=<?php echo $data['catid'];?>"><?php echo $data['catnome']; ?></a></li>
              <?php } ?>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="SubCategorias.html">Sub Categorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">final</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>