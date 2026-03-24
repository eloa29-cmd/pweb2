<?php
//declarar atributos (mesma coisa que variaveis)
$imagem = "midias/pweb1.webp";
$titulo = "Monitor LG";
$resumo = "Monitor LG UltraGear 27G411A-B 27,FHD, 144Hz, 1ms (MBR), NVIDIA G-SYNC, AMD FreeSync, HDR10Monitor LG UltraGear 27G411A-B 27,FHD, 144Hz, 1ms (MBR), NVIDIA G-SYNC, AMD FreeSync, HDR10
Monitor LG UltraGear 27G411A-B 27,FHD, 144Hz, 1ms (MBR), NVIDIA G-SYNC, AMD FreeSync, HDR10
Monitor LG UltraGear 27G411A-B 27,FHD, 144Hz, 1ms (MBR), NVIDIA G-SYNC, AMD FreeSync, HDR10
Monitor LG UltraGear 27G411A-B 27,FHD, 144Hz, 1ms (MBR), NVIDIA G-SYNC, AMD FreeSync, HDR10
Monitor LG UltraGear 27G411A-B 27,FHD, 144Hz, 1ms (MBR), NVIDIA G-SYNC, AMD FreeSync, HDR10
Monitor LG UltraGear 27G411A-B 27,FHD, 144Hz, 1ms (MBR), NVIDIA G-SYNC, AMD FreeSync, HDR10
Monitor LG UltraGear 27G411A-B 27,FHD, 144Hz, 1ms (MBR), NVIDIA G-SYNC, AMD FreeSync, HDR10
4
Monitor LG UltraGear 27G411A-B 27,FHD, 144Hz, 1ms (MBR), NVIDIA G-SYNC, AMD FreeSync, HDR10
Acesse a Loja Oficial de LG
Novo  |  +1000 vendidos
Monitor LG UltraGear 27G411A-B 27,FHD, 144Hz, 1ms (MBR), NVIDIA G-SYNC, AMD FreeSync, HDR10";
$valor = "R$759,05";
$quantidade = "2";
$i = 1;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> O Lojinha</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<?php  require ('menu.php');//unit uses unit?>
  </header>
 <main class="container"> 
    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="carousel1/C1.webp" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="carousel1/C2.webp" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="carousel1/C3.webp" class="d-block w-100" alt="...">
    </div>

      <div class="carousel-item ">
      <img src="carousel1/C4.webp" class="d-block w-100" alt="...">
    </div>

      <div class="carousel-item">
      <img src="carousel1/C5.webp" class="d-block w-100" alt="...">
    </div>

      

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <div class="row">
      <?php while ($i<=10) {?>
      <div class="col mt-2">
      <div class="card" style="width: 18rem;">
  <img src="<?php echo $imagem;?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $titulo;?></h5>
    <p class= "card-text"><?php echo $resumo;?></p>
    <p class ="text-danger"> valor: <b> R$ <?php echo $valor;?></b></p>
    <p class ="text-primary"> Estoque: <?php echo $quantidade;?></p>
    <a href="#" class="btn btn-primary">Ver Produto</a>
  </div>
</div>
      </div>
      <?php $i++;} //$i=$i+1?>
    </div>
 </main>

 <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>