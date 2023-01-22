<!DOCTYPE html>
<html lang="en">

<head>
  <title>Império Blocos</title>
<link rel="shortcut icon" href="img/logorodape.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min3.css"/>



	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style3.css"/>
	
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



        <header class="site-navbar site-navbar-target bg-white" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-lg-4">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="active"><a href="menu.php" class="nav-link">Início</a></li>
				  <li><a href="sobremenu.php" class="nav-link">Sobre</a></li>
                  
                  <li ><a href="Produtosmenu.php" class="nav-link">Produtos</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-4 text-center">
              <div class="site-logo">
               <a href="menu.php"><img src="img/logo.png"></a>
              </div>


              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-primary"></span></a></div>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-left mr-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="contatomenu.php" class="nav-link">Contato</a></li>
                  <li><a href="suacontamenu.php" class="nav-link">Sua conta</a></li>
				  <li><a href="index.php" class="nav-link">Sair</a></li>
                </ul>
              </nav>
            </div>
            

          </div>
        </div>

      </header>
	  
	  
	  <center>
	  		<form action="calculo.php" method="POST">
	<section class="bmi-section spad">
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12 ml-auto">
					<div class="section-title mb-0">
						<h2>Calcular número de <span style="background-color:lightgreen">Blocos</span></h2>
					</div>
					<div class="bmi-calculator-warp">
						<div class="bmi-calculator">
							<div class="row">
								<div class="col-sm-6">
									<input type="number" style="font-size:20px" placeholder="Insira a largura da parede em m:" name="valor1">
								</div>
								<div class="col-sm-6">
									<input type="number" style="font-size:20px" placeholder="Insira a altura da parede em m:" name="valor2">
								</div>
								
								
							</div>
							<h3 style="color:white">Escolha o número de vãos caso queira</h3>
										<div class="row">
							<div class="col-sm-4">
									<a class="site-btn" style="background-color:lightgreen;color:black;" href="calculadora.php"  ><br> <h4 style="color:black">Sem Vão </h4></a> 
								</div>
							<div class="col-sm-2">
									<a class="site-btn" style="background-color:lightgreen;color:black;" href="calculadora1.php"  ><br> <h4 style="color:black">Vão 1</h4></a> 
								</div>
							<div class="col-sm-2">
									<a class="site-btn" style="background-color:lightgreen;color:black;" href="calculadora2.php"  ><br> <h4 style="color:black">Vão 2</h4></a> 
								</div>
							<div class="col-sm-2">
									<a class="site-btn" style="background-color:lightgreen;color:black;" href="calculadora3.php"  ><br> <h4 style="color:black">Vão 3</h4></a> 
								</div>
							<div class="col-sm-2">
									<a class="site-btn" style="background-color:lightgreen;color:black;" href="calculadora4.php"  ><br> <h4 style="color:black">Vão 4 </h4></a> 
								</div>
						</div>		
						<div class="row">
							<div class="col-sm-6">
									<button class="site-btn"  style="background-color:lightgreen" id="bmi-submit"><h4 style="color:black">Calcular </h4></button>
								</div>
								
								
									

								
						
								<?php 

	$v1=$_POST['valor1'];
	
	$v2=$_POST['valor2'];
	
	

	echo "<br><br>";
	echo "<div class='col-sm-6'> <input type='text' style='font-size:30px;color:black; font-family: 'PT Sans'', sans-serif; placeholder='".((($v1 * $v2)*(12.5))+ 10/100*(($v1 * $v2)*(12.5)))." &nbsp;blocos' readonly> </div>";
	
	
	
?>	
						<div class="row">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	  
	
	  </form>
	  </center>
	    
    <footer class="site-footer" >
      <div class="container"style="height:200px">
        <div class="row" >
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">Sobre nós</h2>
                <p>Uma empresa que se importa com o bem estar dos clientes e com seu nome, que leva preço baixo e qualidade à quem quiser.</p>

              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Recursos</h2>
                <ul class="list-unstyled">
                  <li><a href="menu.php">inicio </a></li>
                  <li><a href="sobremenu.php">Sobre nós</a></li>
                  <li><a href="contatomenu.php">Contate-nos</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">



            <h2 class="footer-heading mb-4">Siga-nos</h2>
            <a href="https://www.facebook.com/imperioblocos1/" target="_blank" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="https://www.instagram.com/imperioblocos1/?hl=pt-br" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5513991231417" target="_blank" class="pl-3 pr-3"><span class="icon-whatsapp"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-1 mt-1 text-center">
          <div class="col-md-12">
            <div class="pt-5">
              <p class="small">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> by FirsTech</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>


  </body>

</html>


  </body>

</html>
