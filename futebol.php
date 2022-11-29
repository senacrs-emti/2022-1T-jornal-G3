<?php
//include header
include_once './includes/_header.php';
?>
<main class="col-lg-9 col-12">
<h1 class="text-editoria mt-3">FUTEBOL</h1>
<div style=" position: relative; height: 300px; float: left; margin: 15px; display: inline-block" >  <img class="imagemeditoria mt-3" src="https://cdn-icons-png.flaticon.com/512/53/53283.png" alt="">
  </div>

  <div style=" height: 500px; margin: 15px; position: relative; display: block;" >

  
        <p style="word-wrap: break-word; ">Não se sabe exatamente quando o futebol surgiu. Historiadores contam que começou com o ingleses com bolas de couro. A ação era realizada anualmente, mas, com o tempo, a prática passou a popularizar-se, e os jogos com a bola passaram a ser realizados com maior frequência.</p>
    <p style="word-wrap: break-word; ">Os jogos não tinham regras, logo era permitido muitas agressões e porum tempo era visto como uma atividade violenta e não apropriada para jovens.</p>
    <p style="word-wrap: break-word; ">O crescimento dos desafios e torneios entre clubes foi impulsionador para a institucionalização do futebol, que ocorreu em 1863. A partir da fundação da Football Association (FA), instituição que formulou as primeiras regras para a prática do futebol, o esporte passou a ter mais visibilidade e a elaboração de campeonatos e partidas oficiais iniciou-se. A criação dos campeonatos foi importante para o surgimento de regras universais para o futebol, e, desde então, o esporte começou a expandir-se, universalmente.</p>
    <p style="word-wrap: break-word; ">óbviamente teve muitas mudanças desde a criação do futebol, regras e etc, mas hoje em dia é o esporte mais famoso de todos os tempos.</p>
  </div>  
<hr>



    <div id="carouselExampleIndicators" class="carousel slide col-12" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 carousel-imgs" height="500px" src="./contents/messi.png" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="shadow-text">2x0 Argentina ganha do México</h5>
    <p class="shadow-text ml-5">Messi abre o placar e Argentina ganha após derrota contra Arábia Saudita</p>
  </div>
  </div>
  <div class="carousel-item">
      <img class="d-block w-100 carousel-imgs" height="500px" src="./contents/richarlison.png" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="shadow-text">2X0 Brasil ganha da Sérvia</h5>
    <p class="shadow-text ml-5">Richarlison faz dois gols incluindo um golaço com assistência de Vinícius Jr</p>
  </div>
  </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-imgs" height="500px" src="./contents/japao-derrota-alemanha.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 class="shadow-text">2x1 Japão Vira da Alemanha </h5>
    <p class="shadow-text">Após um gol de pênalti da Alemanha, o Japão vira o jogo contra a Alemanha de forma parecida com a virada da Arábia Saudia sob a Argentina</p>

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
    



    <div class="card bg-dark mt-5 text-white card-noticia col-12">
    <h1 class="mt-1 ml-5">NOTÍCIA</h1>
  <img class="" src="./contents/benzema-e-a-bola-de-ouro.jpg" alt="...">
  <div class="card-body">
    <h3 class="card-title">Karim Benzema é o melhor do mundo  </h3>
    <p class="card-text">O atacante do Real Madrid ficou em primeiro na premiação de melhor do mundo da France Football</p>
    <a href="./noticia-karim-benzema.php" class="btn btn-light">Leia mais</a>
  </div>
</div>



<div class="card bg-dark mt-5 text-white card-noticia col-12">
  <img class="mt-3" src="./contents/cr7-e-messi.jpg"  alt="...">
  <div class="card-body">
    <h4 class="card-title">Cristiano Ronaldo ou Messi</h4>
    <p class="card-text">Artigo de opinião de Rian Garcia Pereira</p>
    <a href="./artigo-de-opiniao-cristiano-ou-messi.php" class="btn btn-light">Leia mais</a>
  </div>
</div>



<div class="card bg-dark mt-5 mb-3 text-white card-noticia col-12">
    <h1 class="mt-1 ml-5">CRÔNICA</h1>
  <img src="./contents/olimpico-gremio.jpg" alt="...">
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