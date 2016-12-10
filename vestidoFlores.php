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
            <img src="http://g02.a.alicdn.com/kf/HTB1g7IqIpXXXXc0aXXXq6xXFXXXD/Fashionable-Ladies-font-b-Dresses-b-font-New-Summer-Chiffon-font-b-Dress-b-font-font.jpg"
            class="img-responsive">
          </div>
          <div class="col-md-6">
            <h2>Vestido floral</h2>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Detraxit consequat et quo num tendi nada. Mais vale um bebadis conhecidiss, que um alcoolatra anonimiss. </p>
            <div class="row">
              <div class="col-md-7">
                <div class="page-header">
                  <h3>Escolha o tamanho:</h3>
                  <div class="btn-group btn-group-lg">
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Dropdown <span class="fa fa-caret-down"></span></a>
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
                      <h3>Preço: &nbsp; R$ 150,00</h3>
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
                          <a href="#" class="thumbnail"><img src="http://img.modait.com.br/produtos/b4/e4/b4e4caa7be9ec14.jpg" style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="http://placehold.it/200x200"style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="http://placehold.it/200x200" style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="http://placehold.it/200x200" style="max-width:100%;"></a>
                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="item">
                      <div class="row">
                        <div class="col-md-3">
                          <a href="" class="thumbnail"><img src="http://placehold.it/200x200" style="max-width:100%;"></a>
                        </div>
                        <div class="col-md-3">
                          <a href="#" class="thumbnail"><img src="http://placehold.it/200x200" style="max-width:100%;"></a>
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
