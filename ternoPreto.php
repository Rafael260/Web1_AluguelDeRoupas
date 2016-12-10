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
            <img src="http://www.louie.com.br/loja/image/data/EDITORIAL/Ludmila/Xadrez1.jpg"
            class="img-responsive">
          </div>
          <div class="col-md-6">
            <h2>Terno preto</h2>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Detraxit consequat et quo num tendi nada. Mais vale um bebadis conhecidiss, que um alcoolatra anonimiss. </p>
            <div class="row">
              <div class="col-md-7">
                <div class="page-header">
                  <h3>Escolha o tamanho:</h3>
                  <div class="btn-group btn-group-lg">
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Dropdown <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li>
                        <a href="#">P</a>
                      </li>
                       <li>
                        <a href="#">M</a>
                      </li>
                      <li>
                        <a href="#">G</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="page-header">
                      <h3>Preço: &nbsp; R$ 350,00</h3>
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
                          <a href="#" class="thumbnail"><img src="http://i00.i.aliimg.com/photo/v0/2011550150/High_quality_hot_selling_the_boy_black.jpg_200x200.jpg" style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="https://ae01.alicdn.com/kf/HTB1Oz2MLXXXXXaUXXXXq6xXFXXX2/2016-Outono-Nova-Chegada-de-Alta-Qualidade-Vestido-Weding-%C3%9Anico-Bot%C3%A3o-Casual-Homens-Terno-Preto-Ternos.jpg_200x200.jpg"style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="http://www.dhresource.com/200x200s/f2-albu-g3-M00-3E-7D-rBVaHVZbwgmAO9dKAAFUJ8UgyVg398.jpg/custom-made-preto-smoking-tailcoat-rope-stripe.jpg" style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="https://s-media-cache-ak0.pinimg.com/736x/e4/ae/63/e4ae630dce146d340193aa465105799c.jpg" style="max-width:100%;"></a>
                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="item">
                      <div class="row">
                        <div class="col-md-3">
                          <a href="" class="thumbnail"><img src="https://res.cloudinary.com/stylight/image/upload/b_rgb:fff,c_pad,f_auto,q_auto,h_200,w_200/product-dolce-gabbana-terno-com-bolsos-67948890.jpg" style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="https://ae01.alicdn.com/kf/HTB1.I6XMVXXXXbeXFXXq6xXFXXXN/-Casacos-Cal%C3%A7a-Colete-Homens-Ternos-Azul-Royal-Slim-Vestido-de-Neg%C3%B3cios-da-Custom-Fit-Tuxedo.jpg_200x200.jpg" style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="" class="thumbnail"><img src="https://ae01.alicdn.com/kf/HTB1AQAWKXXXXXcmXXXXq6xXFXXX7/Novo-2016-Mens-Cinza-Claro-Ternos-Cal%C3%A7as-Jacket-Vestido-Formal-Conjunto-Terno-dos-homens-ternos-de.jpg_200x200.jpg" style="max-width:100%;"></a>
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
