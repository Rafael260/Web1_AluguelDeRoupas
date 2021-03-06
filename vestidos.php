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
        <h3>Vestidos</h3>
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

         <hr/>

         <p>Comprimento</p>
          <div class="checkbox">
            <label><input type="checkbox" value="">Longo</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Curto</label>
          </div>

          <hr/>

          <p>Ocasião</p>
          <div class="checkbox">
            <label><input type="checkbox" value="">Casamento</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Casamento diurno</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Madinha</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="">Formatura</label>
          </div>
      </div>
      <!-- apresentacao dos produtos -->
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://www.belasdicas.com/img/fotos/vestidos%20de%20neoprene%206.jpeg"/> <br/>
            Vestido 1 <br/>
            <a href="vestidoAzul.php">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://vestidododia.com.br/wp-content/uploads/2014/12/vestidos-de-formatura-azuis24-200x300.jpg"/> <br/>
            Vestido 2 <br/>
            <a href="vestidoAzul.php">Alugar</a>
          </div>
          <div class="col-lg-4  col-md-4 well item">
            <img src="http://vestidododia.com.br/wp-content/uploads/2014/07/Vestidos-jardineira-pretos1-200x300.jpg"/> <br/>
            Vestido 3 <br/>
            <a href="#">Alugar</a>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-4 col-md-4 well item">
            <img class="item" src="http://modelosdevestidos.biz/wp-content/uploads/2014/04/vestidos-tubinho-laranja-200x300.jpg"/> <br/>
            Vestido 4 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://guiadasmulheres.com/blog/wp-content/uploads/2016/06/image002-200x300.jpg"/> <br/>
            Vestido 5 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://vestidododia.com.br/wp-content/uploads/2014/06/vestido-de-renda-azul-200x300.jpg"/> <br/>
            Vestido 6 <br/>
            <a href="#">Alugar</a>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 well item">
            <img src="https://s-media-cache-ak0.pinimg.com/564x/91/ff/8d/91ff8d015341dafdae7c3381926298d1.jpg"/> <br/>
            Vestido 7 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://vestidododia.com.br/wp-content/uploads/2014/11/vestido-de-natal-vermelho-200x300.jpg"/> <br/>
            Vestido 8 <br/>
            <a href="#">Alugar</a>
          </div>
          <div class="col-lg-4 col-md-4 well item">
            <img src="http://modelosdevestidos.biz/wp-content/uploads/2014/04/festa-rosa-200x300.jpg"/> <br/>
            Vestido 9 <br/>
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