<!DOCTYPE html>
<html lang="en">

<head>
  <title>Império Blocos</title>
<link rel="shortcut icon" href="img/logorodape.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

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
			<link rel="stylesheet" href="css/estilo.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
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
                  <li ><a href="index.php" class="nav-link">Início</a></li>
				  <li><a href="Sobre.html" class="nav-link">Sobre</a></li>
                  <li ><a href="produtos.html" class="nav-link">Produtos</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-4 text-center">
              <div class="site-logo">
               <a href="index.php"><img src="img/logo.png"></a>
              </div>


              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-primary"></span></a></div>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-left mr-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="contato.html" class="nav-link">Contato</a></li>
                  <li class="active"><a href="login.php" class="nav-link">Login</a></li>
                  <li ><a href="cadastroUsuario.php" class="nav-link">Registre-se</a></li>
                </ul>
              </nav>
            </div>
            

          </div>
        </div>

      </header>
	
  
	
 <center>

<div id="corpo-form">
	<h1 style="color:black">Entrar</h1>
	<form method="POST">
		<label for="uemail"><h3 style="color:black">E-mail</h3></label>
		<input type="uemail" name="login" placeholder="E-mail"required>
		<label for="psw"><h3 style="color:black">Senha</h3></label>
		<input type="password" name="senha" placeholder="senha"required>
		<input type="submit" value="Acessar">
		<button type="reset" class="cancelbtn">Cancelar</button>
	
		  <a href="cadastroUsuario.php"><p style="color:black">Ainda não é inscrito?<strong>Registre-se</strong></p></a>
		 
	</form>
</div>

   <?php
	if (!empty($_POST)) 
	{
		session_start();
		include_once 'conexao.php';
		
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		
		$rs = $con->query("SELECT * FROM tb_usuario where email_usuario='$login'and senha_usuario='$senha'");
		$rd = $con->query("SELECT * FROM tb_admin where nm_admin='$login'and senha_admin='$senha'");
		
		$rs -> execute();
		
		
		$rt = $con->query("SELECT * FROM tb_usuario where email_usuario='$login'and senha_usuario='$senha'");
		$row = $rt->fetch();
		$_SESSION['cd_usuario'] = $row['cd_usuario'];
		
			
		if($rs->fetch(PDO::FETCH_ASSOC) == true)
		{
			
			$_SESSION['usuario'] = $login; 
			header('Location:menu.php');
		}

	
		
		if($rd->fetch(PDO::FETCH_ASSOC) == true)
		{
			$_SESSION['admin'] = $login;
			header('Location:admim.php');
		}

		else
		{
			unset ($_SESSION['admin']);
			echo"<script>alert('Nome ou senha incorreto');</script>";
		}
	
	}   
	
?>


    


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
                  <li><a href="index.php">Início </a></li>
                  <li><a href="sobre.html">Sobre nós</a></li>
                  <li><a href="contato.html">Contate-nos</a></li>
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
