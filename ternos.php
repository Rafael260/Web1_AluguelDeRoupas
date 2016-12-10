<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title>Sonho meu - Como funciona</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"> </script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/meucss.css"/>

</head>
<body>
  <div class="container">
    <div class="header">
      
      <?php
        include_once("header.php");
      ?>  
    </div>

      <div class="categoria bg-info text-center">
        <h3>Ternos</h3>
      </div>
      <br/>
    
    <div class="row">
      <div class="col-lg-8"></div>
      <div class="col-lg-4">
        <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">Anterior</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">Próximo</span>
      </a>
    </li>
  </ul>
</nav>
      </div>
    </div>

    <div class="row">
      <!--filtro -->
      <div class="col-lg-2 item">
        <h4> Filtros</h4>
          <p>Tamanhos</p>
          <div class="checkbox">
            <label><input type="checkbox" value="">34</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">36</label>
          </div>
         <div class="checkbox">
          <label><input type="checkbox" value="">38</label>
         </div>
         <div class="checkbox">
          <label><input type="checkbox" value="">40</label>
         </div>
         <div class="checkbox">
          <label><input type="checkbox" value="">42</label>
         </div>
         <div class="checkbox">
          <label><input type="checkbox" value="">44</label>
         </div>
         <div class="checkbox">
          <label><input type="checkbox" value="">46</label>
         </div>

      </div>
      <!-- apresentacao dos produtos -->
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://www.m1mabis.com.br/lojista/imagens/produtos/ternos_bac5a46b638046abd7f76b054e0a7066.png"/> <br/>
            Terno 1 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://4.bp.blogspot.com/_YGAGFZo-nqk/TFwX_NlR2bI/AAAAAAAAACg/ZR_Q0x-1jLY/s1600/manga.jpg"/> <br/>
            Terno 2 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4  col-md-4 well item">
            <img src="http://2.bp.blogspot.com/_uuu-6GSmiK0/TMXHEpajWwI/AAAAAAAAAWg/bIwsu8U7H94/s1600/foto-smoking-06.jpg"/> <br/>
            Terno 3 <br/>
            <a href="#">Alugar</a>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-4 col-md-4 well item">
            <img class="item" src="http://i.ebayimg.com/images/g/8tMAAOSwyjBW6MWM/s-l300.jpg"/> <br/>
            Terno 4 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://www.seuevento.net.br/uploads/noticia/img_890852_20161026tumb.jpeg"/> <br/>
            Terno 5 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://lelenavarro.com.br/wp-content/uploads/2014/09/317433e04c7e174039ba6c54654b4c2d-1-199x300.jpg"/> <br/>
            Terno 6 <br/>
            <a href="#">Alugar</a>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://www.universofeminino.info/blog/wp-content/gallery/ternos-calvin-klein/ternos-calvin-klein-9.jpg"/> <br/>
            Terno 7 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://toquefinalnoivasboc.com.br/images/homens-terno.jpg"/> <br/>
            Terno 8 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://www.universofeminino.info/blog/wp-content/gallery/terno-calvin-klein/terno-calvin-klein-14.jpg"/> <br/>
            Terno 9 <br/>
            <a href="#">Alugar</a>

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8"></div>
      <div class="col-lg-4">
        <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">Anterior</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">Próximo</span>
      </a>
    </li>
  </ul>
</nav>
      </div>
    </div>

    <?php
      include_once("footer.php");
    ?>
  </div>
  
</body>
</html>