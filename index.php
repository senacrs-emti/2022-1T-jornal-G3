<?php
//include header
include_once './includes/_header.php';
?>
<main class="col-lg-9 col-12">


<h3 class="bg-dark text-white mt-3" style="border-radius: 15px 15px; text-align:center;">Veja os grupos da Copa do Mundo já definidios:</h3>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner  mt-3">
    <div class="carousel-item active">
      <img class="d-block w-100 carousel-imgs" height="300px" src="./contents/grupo-a.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-imgs" height="300px" src="./contents/grupo-b.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-imgs" height="300px" src="./contents/grupo-c.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-imgs" height="300px" src="./contents/grupo-d.png" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-imgs" height="300px" src="./contents/grupo-e.png" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-imgs" height="300px" src="./contents/grupo-f.png" alt="Sixth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<hr>
<h1 class="bg-dark text-white" style="border-radius: 15px 50px 15px; text-align:center;">NOTÍCIAS</h1>

<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4 mt-3">
    <div class="card bg-dark text-white card-index">
    <img class="img-card-index" src="./contents/japao-espanha-noticia.jpg" alt="...">
      <div class="card-body">
      <h5 class="card-title"> <span class="badge badge-danger mr-2">New</span>Japão ganha da Espanha e passa em primeiro lugar no grupo E </h5>
    <p class="card-text">Depois de mais uma virada do Japão, eles conseguem o primeiro lugar na classificação para as oitavas de final da Copa do mundo.</p>
      <a href="./noticia-japao-espanha.php" class="btn btn-light btn-block ">Leia mais</a>
      </div>
    </div>
  </div>

  <div class="col mb-4 mt-3">
    <div class="card card-index bg-dark text-white">
    <img class="img-card-index" src="./contents/benzema-e-a-bola-de-ouro.jpg" alt="...">
      <div class="card-body">
      <h5 class="card-title">Karim Benzema é o melhor do mundo </h5>
    <p class="card-text">O atacante do Real Madrid ficou em primeiro na premiação de melhor do mundo da France Football</p>
      <a href="./noticia-karim-benzema.php" class="btn btn-light btn-block mt-5">Leia mais</a>
      </div>
    </div>
  </div>

  <div class="col mb-4">
    <div class="card bg-dark text-white card-index">
      <img class="img-card-index" src="./contents/ramon-cbum.png" class="card-img-top" alt="...">
      <div class="card-body">
      <h3 class="card-title">MR olimpia 2022</h3>
    <p class="card-text">O Mr Olympia Brasil, que aconteceu entre sexta-feira (23) e domingo (25) de setembro no Pro Magno Centro de Eventos, em São Paulo, não é apenas a maior competição de bodybuilding do país.</p>
    <a href="./mrolimpia2022.php" class="btn btn-light btn-block mb-3">Leia mais</a>
  </div>
    </div>
  </div>

  <div class="col mb-4">
    <div class="card bg-dark text-white card-index">
    <img class="img-card-index" src="./contents/luva-amazon-nba.png" alt="...">
      <div class="card-body">
      <h5 class="card-title">Amazon irá transmitir a NBA e usa Luva de Pedreiro como propaganda</h5>
      <p class="card-text">O release enviado pelo serviço de streaming afirma que a plataforma terá quatro jogos exclusivos por semana.</p>
      <a href="./noticiabasket.php" class="btn btn-light btn-block mb-2">Leia mais</a>
      </div>
    </div>
  </div>
</div>


<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card bg-dark text-white card-index">
    <img class=" img-card-index" src="https://esporteamotor.com.br/wp-content/uploads/2022/10/Aposentadoria-ficando-um-pouco-mais-real-a-medida-que-o.jpg" alt="...">
      <div class="card-body">
      <h5 class="card-title">Aposentadoria de Sebastian Vettel</h5>
      <p class="card-text">Noticia sobre a aposentadoria do famoso piloto Sebastian Vettel</p>
    <a href="./noticia-f1.php" class="btn btn-light btn-block mt-5">Leia mais</a>
      </div>
    </div>
  </div>


<div class="col mb-4">
    <div class="card bg-dark text-white card-index">
      <img class="img-card-index" src="https://classic.exame.com/wp-content/uploads/2022/10/GettyImages-1435299459.jpg?quality=70&strip=info&w=1024" class="card-img-top" alt="...">
      <div class="card-body">
    <h5 class="card-title">Charles do Bronx perde por meio de finalização contra Islam Makhachev</h5>
    <p class="card-text">Charles Oliveira ‘do Bronx’ perde após 5 anos de invencibilidade e seu reinado no peso leve chega a um fim</p>
    <a href="./noticia-ufc.php" class="btn btn-light btn-block mt-3">Leia mais</a>
      </div>
    </div>
  </div>
</div>



    </main>
<?php
// include do aside
include_once './includes/_aside.php';

//include do footer
include_once './includes/_footer.php';
?>
