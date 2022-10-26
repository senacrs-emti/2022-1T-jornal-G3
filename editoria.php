<?php
//include header
include_once './includes/_header.php';
?>
<main class="col-lg-8 col-12">
    <img class="imagemeditoria mt-3" src="https://cdn-icons-png.flaticon.com/512/53/53283.png" alt="">
    <p class="text-editoria">(imagem da logo do esporte)</p>
    <h1 class="text-editoria">Nome do esporte selecionado</h1>

    <div class="card bg-dark m-5 text-white card-noticia col-10" style="width: 45rem;">
  <img src="https://www.lance.com.br/files/article_main/uploads/2022/10/17/634d8550da4e0.jpeg" class="card-img-top col-11 ml-4 mr-4 mt-2 card-image" alt="...">
  <div class="card-body">
    <h5 class="card-title">Título notícia (relacionada ao esporte) </h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="./noticia.php" class="btn btn-primary">Leia mais</a>
  </div>
</div>


</main>
<?php
// include do aside
include_once './includes/_aside.php';

//include do footer
include_once './includes/_footer.php';
?>