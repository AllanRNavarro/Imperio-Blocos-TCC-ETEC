 <!DOCTYPE html>
<html lang="en">

<head>
  <title>Império Blocos</title>
<link rel="shortcut icon" href="img/logorodape.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styless.css">
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
 <script type="text/javascript" src="js/ajax.js"></script>
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
                  <li ><a href="admim.php" class="nav-link">Início</a></li>
				  <li><a href="sobreadmin.php" class="nav-link">Sobre</a></li>
                  <li ><a href="produtosadmin.php" class="nav-link">Produtos</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-4 text-center">
              <div class="site-logo">
               <a href="admim.php"><img src="img/logo.png"></a>
              </div>


              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-primary"></span></a></div>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-left mr-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="contatoadmin.php" class="nav-link">Contato</a></li>
                  <li class="active"><a href="consultaUsuario.php" class="nav-link">Consulta</a></li>
				  <li><a href="index.php" class="nav-link">Sair</a></li>
                </ul>
              </nav>
            </div>
            

          </div>
        </div>

      </header>

<br><br>
	
	<div class="container1">
<?php

	echo"<h1>Excluir Cliente</h1>";

	$cod = $_GET['codigo'];
	
	include_once('conexao.php');
	 
		$select = $con->prepare("SELECT * FROM tb_usuario where cd_usuario=$cod");
		$select->execute();
	
		while($row = $select->fetch()) 
		{
			echo "<p>";
			echo "<br><b>Codigo: </b>".$row['cd_usuario'];
			echo "<br><b>Nome: </b>".$row['nm_usuario'];
			echo "<br><b>CPF: </b>".$row['cpf_usuario'];
			echo "<br><b>RG: </b>".$row['rg_usuario'];
			echo "<br><b>CEP: </b>".$row['cep_usuario'];
			echo "<br><b>Numero: </b>".$row['num_usuario'];
			echo "<br><b>Telefone: </b>".$row['tel_usuario'];
			echo "<br><b>Celular: </b>".$row['cel_usuario'];
			echo "<br><b>Email: </b>".$row['email_usuario'];
			echo "<br><b>Senha: </b>".$row['senha_usuario'];
			echo "</p>";
	
		}
 ?>
	<input 	type="button" name="Excluir" value="Excluir dados do Usuario" class="botaoExcluir" onclick="cadastro();javascript: location.href='confirmaExcluirUsuario.php?codigo=<?php echo $cod;?>'" />
				
	<input type="button" name="Voltar" value="Voltar"  	class="botaoVoltar" onclick="javascript: location.href='consultaUsuario.php'">
	 </div>
	
	<br><br><br>
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
                  <li><a href="admim.php">Início </a></li>
                  <li><a href="sobreadmin.php">Sobre nós</a></li>
                  <li><a href="contatoadmin.php">Contate-nos</a></li>
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
<script>
	 function cadastro() {
	alert("Cliente excluido com sucesso!");
		window.location="consultaUsuario.php";
}
</script>

  </body>

</html>
</body>
</html>
