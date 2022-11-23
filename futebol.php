<?php
//include header
include_once './includes/_header.php';
?>
<main class="col-lg-9 col-12">
    <img class="imagemeditoria mt-3" src="https://cdn-icons-png.flaticon.com/512/53/53283.png" alt="">
    <h1 class="text-editoria mt-3">FUTEBOL</h1>
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
    <h5 class="shadow-text">2x1 Argentina perde contra Arábia Saudit</h5>
    <p class="shadow-text">Depois de uma virada da Arábia Saudita, Argentina tem uma derrota após 1.300 dias</p>
  </div>
  </div>
  <div class="carousel-item">
      <img class="d-block w-100 carousel-imgs" src="./contents/eriksen-copa.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="shadow-text">0x0 Dinamarca e Tunísia empatam</h5>
    <p class="shadow-text">Com Eriksen Dinamarca tem um empate com um possível penalti e algumas chances, porém não sai nem um gol.</p>
  </div>
  </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-imgs" src="./contents/japao-derrota-alemanha.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="shadow-text">2x1 Japão Vira da Alemanha </h5>
    <p class="shadow-text">Após um gol de pênalti, o Japão vira o jogo contra a Alemanha de forma parecida com a virada da Arábia Saudia sob a Argentina</p>

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
    <h3 class="card-title">Karim Benzema é o melhor do mundo  </h3>
    <p class="card-text">O atacante do Real Madrid ficou em primeiro na premiação de melhor do mundo da France Football</p>
    <a href="./noticia-karim-benzema.php" class="btn btn-light">Leia mais</a>
  </div>
</div>



<div class="card bg-dark m-5 text-white card-noticia col-10" style="width: 45rem;">
  
  <img src="./contents/cr7-e-messi.jpg" class="card-img-top col-11 ml-4 mr-4 mt-2 card-image" alt="...">
  <div class="card-body">
    <h4 class="card-title">Cristiano Ronaldo ou Messi</h4>
    <p class="card-text">Artigo de opinião de Rian Garcia Pereira</p>
    <a href="./artigo-de-opiniao-cristiano-ou-messi.php" class="btn btn-light">Leia mais</a>
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