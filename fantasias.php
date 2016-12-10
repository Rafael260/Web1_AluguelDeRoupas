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
        <h3>Fantasias</h3>
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
          <p>Sexo</p>
          <div class="checkbox">
            <label><input type="checkbox" value="">Feminino</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Masculino</label>
          </div>

          <hr/>

          <p>Tamanhos</p>
          <div class="checkbox">
            <label><input type="checkbox" value="">34</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">36</label>
          </div>
         <div class="checkbox disabled">
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

         <hr/>

          <p>Tipo de fantasia</p>
          <div class="checkbox">
            <label><input type="checkbox" value="">Super-heróis</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Vilões</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Halloween</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Carnaval</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">São João</label>
          </div>

      </div>
      <!-- apresentacao dos produtos -->
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://www.novatango.com.br/wp-content/uploads/2016/08/bruxa_arabela_a-200x300.jpg"/> <br/>
            Fantasia 1 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://www.emdestaquenacidade.com.br/wp-content/uploads/2014/09/bruno.jpg"/> <br/>
            Fantasia 2 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4  col-md-4 well item">
            <img src="https://alemdatorre.files.wordpress.com/2015/03/1-0-supergirl-alisa-kiss.jpg?w=200&h=300"/> <br/>
            Fantasia 3 <br/>
            <a href="#">Alugar</a>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-4 col-md-4 well item">
            <img class="item" src="http://festivalfestasefantasias.com.br/wp-content/gallery/masculinas_1/thumbs/thumbs_lanterna-verde.jpg"/> <br/>
            Fantasia 4 <br/>
            <a href="#">Alugar</a>
          </div> 
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://festivalfestasefantasias.com.br/wp-content/gallery/masculinas_1/thumbs/thumbs_popeye.jpg"/> <br/>
            Fantasia 5 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://appsisecommerce.s3.amazonaws.com/clientes/cliente8117/produtos/34838/L01450890782.jpg"/> <br/>
            Fantasia 6 <br/>
            <a href="#">Alugar</a>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://appsisecommerce.s3.amazonaws.com/clientes/cliente6726/produtos/28969/L01450721923.jpg"/> <br/>
            Fantasia 7 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://statusdiva.com.br/wp-content/uploads/2016/06/9-200x300.jpg"/> <br/>
            Fantasia 8 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://festivalfestasefantasias.com.br/wp-content/gallery/masculinas_1/thumbs/thumbs_batman_dark_knight.jpg"/> <br/>
            Fantasia 9 <br/>
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