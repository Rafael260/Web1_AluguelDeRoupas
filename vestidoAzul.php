<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title>Sonho meu - Início</title>
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


    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="https://meucasamento.org/wp-content/uploads/2015/05/vestido-de-madrinha-azul-21.jpg"
            class="img-responsive">
          </div>
          <div class="col-md-6">
            <h2>Vestido azul</h2>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Detraxit consequat et quo num tendi nada. Mais vale um bebadis conhecidiss, que um alcoolatra anonimiss. </p>
            <div class="row">
              <div class="col-md-7">
                <div class="page-header">
                  <h3>Escolha o tamanho:</h3>
                  <div class="btn-group btn-group-lg">
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Tamanho <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li>
                        <a href="#">34</a>
                      </li>
                       <li>
                        <a href="#">36</a>
                      </li>
                      <li>
                        <a href="#">38</a>
                      </li>
                      <li>
                        <a href="#">40</a>
                      </li>
                       <li>
                        <a href="#">42</a>
                      </li>
                      <li>
                        <a href="#">44</a>
                      </li>
                       <li>
                        <a href="#">46</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="page-header">
                      <h3>Preço: &nbsp; R$ 280,00</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <a class="btn btn-lg btn-success">Alugar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
              <h3>Produtos semelhantes</h3>
                <div id="Carousel" class="carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="" data-slide-to="0" class="active"></li>
                    <li data-target="" data-slide-to="1"></li>
                    <li data-target="" data-slide-to="2"></li>
                  </ol>
                 
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="row">
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="http://www.dhresource.com/200x200s/f2-albu-g1-M00-FA-B8-rBVaGVbNavSAGLcNAAEYcl787YA273.jpg/glitter-lujo-luz-noche-cielo-azul-del-desfile.jpg" style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="http://www.dhresource.com/200x200s/f2-albu-g1-M01-68-B8-rBVaGFZYDF6AadmpAAHcc173i-g220.jpg/cielo-azul-claro-tul-vestidos-de-baile-de.jpg"style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="http://media.muccashop.com.br/hering/vestido-curto-hering-em-jeans-com-alcas-duplas-1478767758.64.200x200.jpg" style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="http://www.dhresource.com/200x200s/f2-albu-g3-M00-1D-7F-rBVaHFZzwcmAHn8NAABoaa7IGaM545.jpg/manga-larga-vestidos-de-baile-2016-sky-light.jpg" style="max-width:100%;"></a>
                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="item">
                      <div class="row">
                        <div class="col-md-3">
                          <a href="" class="thumbnail"><img src="http://www.dhresource.com/200x200s/f2-albu-g2-M01-BC-1D-rBVaG1ZOzeeAdlL5AAFX62wl-7c430.jpg/moda-sky-light-blue-renda-m-e-da-noiva-vestidos.jpg" style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="http://media.muccashop.com.br/posthaus/vestido-azul-1460487593.55.200x200.jpg" style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="" class="thumbnail"><img src="http://placehold.it/200x200" style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="http://placehold.it/200x200"  style="max-width:100%;"></a>
                        </div>
                      </div>
                      
                    </div>
                    
                  </div>
                  <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php 
	include_once("footer.php")
?>


</div>
</body>
</html>
