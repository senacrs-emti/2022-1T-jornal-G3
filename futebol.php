<?php
//include header
include_once './includes/_header.php';
?>
<main class="col-lg-9 col-12">
    <img class="imagemeditoria mt-3" src="https://cdn-icons-png.flaticon.com/512/53/53283.png" alt="">
    <h1 class="text-editoria">Futebol</h1>
<hr>

    <div id="carouselExampleIndicators" class="carousel slide col-10 ml-5 " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 carousel-imgs" src="./contents/argentina-perdeu.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Argentina perde contra Arábia Saudita 2x1</h5>
    <p>Depois de uma virada da Arábia Saudita, Argentina tem uma derrota após 1.300 dias</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-imgs" src="./contents/eriksen-copa.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Dinamarca e Tunísia empatam 0X0</h5>
    <p>Com Eriksen Dinamarca tem um empate com um possível penalti e algumas chances, porém não sai nem um gol. 
    </p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-imgs" src="..." alt="Third slide">

    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    <div class="card bg-dark m-5 text-white card-noticia col-10" style="width: 45rem;">
    <h1 class="mt-1 ml-5">NOTÍCIA</h1>
  <img src="./contents/benzema-e-a-bola-de-ouro.jpg" class="card-img-top col-11 ml-4 mr-4 mt-2 card-image" alt="...">
  <div class="card-body">
    <h5 class="card-title">Karim Benzema é o melhor do mundo  </h5>
    <p class="card-text">O atacante do Real Madrid ficou em primeiro na premiação de melhor do mundo da France Football</p>
    <a href="./noticia-karim-benzema.php" class="btn btn-light">Leia mais</a>
  </div>
</div>

<div class="card bg-dark m-5 text-white card-noticia col-10" style="width: 45rem;">
    <h1 class="mt-1 ml-5">CRÔNICA</h1>
  <img src="./contents/olimpico-gremio.jpg" class="card-img-top col-11 ml-4 mr-4 mt-2 card-image" alt="...">
  <div class="card-body">
    <h1 class="card-title">Jogo do Grêmio</h1>
    <hr>
    <h5>Crônica de Rian Garcia Pereira</h5>
    
    <a href="./cronica-jogo-do-gremio.php" class="btn btn-light">Leia mais</a>
  </div>
</div>


</main>
<?php
// include do aside
include_once './includes/_aside.php';

//include do footer
include_once './includes/_footer.php';
?>