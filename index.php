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

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carrosel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="images/vestido-noiva1.jpg" alt="Vestido de noiva">
                </div>

                <div class="item">
                  <img src="images/vestidos.jpg" alt="Vestidos balada">
                </div>

                <div class="item">
                  <img src="images/coat.jpg" alt="Terno">
                </div>

                <div class="item">
                  <img src="images/ternos.png" alt="Ternos">
                </div>
              </div>
              </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        <br/>

          <div class="container">
            <div class="row">
              <h2>Os mais populares da semana</h2>
            </div>
            <div class="row">
              <div class="gallery-holder">
                <div class="col-md-10">
                  <div class="carousel slide media-carousel">
                    <div class="carousel-inner">
                      <div class="item-active">
                        <div class="row">
                          <div class="col-md-4">
                            <a class="thumbnail" href="#"><img alt="" src="https://s-media-cache-ak0.pinimg.com/736x/bf/ba/6f/bfba6f72b6a36f860e438294d9f06458.jpg"></a>
                          </div>          
                          <div class="col-md-4">
                            <a class="thumbnail" href="#"><img alt="" src="http://appsisecommerce.s3.amazonaws.com/clientes/cliente10159/produtos/9959/Z11450791392.jpg"></a>
                          </div>
                          <div class="col-md-4">
                            <a class="thumbnail" href="#"><img alt="" src="http://www.review-australia.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/R/E/RE15DR125_REMUL001_1.jpg"></a>
                          </div>        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <div class="row">
        	<div class="col-lg-3"></div>
        	<div class="col-lg-6">
        		<div class="bloco-form">
        			<form>
        				<h3>Alugue sua roupa</h3>
        				<div class="form-group">
        					<div class='input-group date' id='datetimepicker1'>
                    			<input type='text' class="form-control" />
                    			<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    			</span>
                			</div>
                			<label for="spCategoria">Categoria</label>
    						<select class="form-control" name="categoria" id="spCategoria">
    							<option value="Vestidos">Vestidos</option>
    							<option value="Ternos">Ternos</option>
    							<option value="Fantasias">Fantasias</option>
  							</select>
  							<label for="spTamanho">Tamanho</label>
    						<select class="form-control" name="tamanho" id="spTamanho">
    							<option value="34">34</option>
    							<option value="36">36</option>
    							<option value="38">38</option>
    							<option value="40">40</option>
    							<option value="42">42</option>
    							<option value="44">44</option>
    							<option value="46">46</option>
  							</select>
  							<br/>
  							<button type="submit" class="btn btn-default btn-block"> Buscar roupas</button>
        				</div>
        			</form>
        		</div>
        	</div>
        	<div class="col-lg-3"></div>
        </div>
        <br/>
  <?php
    include_once("footer.php");
  ?>
  </div>
  

</body>
</html>