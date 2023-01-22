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
	
	
	
	<?php	
		session_start(); 
		include_once('conexao.php');
		
		if(isset($_SESSION['admin']))
		{
			$select = $con->prepare("SELECT ds_imagem FROM tb_usuario where nm_usuario ='". $_SESSION['admin']."'");
			$select->execute();
			$row = $select->fetch();
		}
		else
		{
			echo "
			<script>
				window.alert('Não permitido')
				window.location.href='index.html';
			</script>";
			
		}
		//echo $row['ds_imagem'];
	?>
	   <script type="text/javascript" >
   
			
			
			
			
			//var strCPF = "12345678909";
			//alert(TestaCPF(strCPF));
			
			function limpa_formulário_cep() {
					//Limpa valores do formulário de cep.
					document.getElementById('rua').value=("");
					document.getElementById('bairro').value=("");
					document.getElementById('cidade').value=("");
					document.getElementById('uf').value=("");
					
			}

			function meu_callback(conteudo) {
				if (!("erro" in conteudo)) {
					//Atualiza os campos com os valores.
					document.getElementById('rua').value=(conteudo.logradouro);
					document.getElementById('bairro').value=(conteudo.bairro);
					document.getElementById('cidade').value=(conteudo.localidade);
					document.getElementById('uf').value=(conteudo.uf);
					
				} //end if.
				else {
					//CEP não Encontrado.
					limpa_formulário_cep();
					alert("CEP não encontrado.");
				}
			}
				
			function pesquisacep(valor) {

				//Nova variável "cep" soente com dígitos.
				var cep = valor.replace(/\D/g, '');

				//Verifica se campo cep possui valor informado.
				if (cep != "") {

					//Expressão regular para validar o CEP.
					var validacep = /^[0-9]{8}$/;

					//Valida o formato do CEP.
					if(validacep.test(cep)) {

						//Preenche os campos com "..." enquanto consulta webservice.
						document.getElementById('rua').value="...";
						document.getElementById('bairro').value="...";
						document.getElementById('cidade').value="...";
						document.getElementById('uf').value="...";
						

						//Cria um elemento javascript.
						var script = document.createElement('script');

						//Sincroniza com o callback.
						script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

						//Insere script no documento e carrega o conteúdo.
						document.body.appendChild(script);

					} //end if.
					else {
						//cep é inválido.
						limpa_formulário_cep();
						alert("Formato de CEP inválido.");
					}
				} //end if.
				else {
					//cep sem valor, limpa formulário.
					limpa_formulário_cep();
				}
			};
	
		</script>
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
                  <li class="active"><a href="admim.php" class="nav-link">Início</a></li>
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
                  <li><a href="consultaUsuario.php" class="nav-link">Consulta</a></li>
				  <li><a href="index.php" class="nav-link">Sair</a></li>
                </ul>
              </nav>
            </div>
            

          </div>
        </div>

      </header>

	
	<?php

		echo"<center><h1>Alterar Cliente</h1> </center><br><br>";

		$cod = $_GET['codigo'];
		
		include_once('conexao.php');
		 
			$select = $con->prepare("SELECT * FROM tb_usuario where cd_usuario=$cod");
			$select->execute();
		
			$row = $select->fetch();
			
	 ?>
	 

	  <center>
		<form action="confirmaAlterarUsuario.php" method="POST">

			<div class="container">
				
				<label for="cname"><b>Código</b></label>
				<input type="text"   name="codigo" value="<?php echo $row['cd_usuario'];?>" readonly="true">
				
				<label for="uNome"><b>Nome</b></label>
				<input type="text" placeholder="Nome do Cliente" name="nome" value="<?php echo $row['nm_usuario'];?>" >
				
				<label for="uCPF"><b>CPF</b></label>
				<input type="text" placeholder="CPF do Cliente" name="cpf"   maxlength="11" value="<?php echo $row['cpf_usuario'];?>">
				
				<label for="uCNPJ"><b>CNPJ</b></label>
				<input type="text" placeholder="CNPJ do Cliente" name="cnpj"  maxlength="11" value="<?php echo $row['cnpj_usuario'];?>">
			
				<label for="uRG"><b>RG</b></label>
				<input type="text" placeholder="RG do Cliente" name="rg" value="<?php echo $row['rg_usuario'];?>" >
				
				<label for="uCEP"><b>CEP</b></label>
				<input type="text" placeholder="CEP do Cliente" id="cep" name="cep" value="<?php echo $row['cep_usuario'];?>"
					   onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
				<input type="button" name="buscaCep" style="background-color: #FF0066;color:white" value="Buscar" onclick="pesquisacep(cep.value);">
				<br><br>
				
				<label for="uRua"><b>Rua</b></label>
				<input type="text" name="rua" id="rua">
				
				<label for="uNumero"><b>Numero</b></label>
				<input type="text" name="numero" id="numero" value="<?php echo $row['num_usuario'];?>" >
				
				<label for="uBairro"><b>Bairro</b></label>
				<input type="text" name="bairro" id="bairro">
				
				<label for="uCidade"><b>Cidade</b></label>
				<input type="text" name="cidade" id="cidade">
				
				<label for="uUF"><b>Estado</b></label>
				<input type="text" name="uf" id="uf">
				
				<label for="uTel"><b>Telefone</b></label>
				<input type="text" placeholder="Telefone do Cliente" name="telefone" value="<?php echo $row['tel_usuario'];?>" >
				
				<label for="uCel"><b>Celular</b></label>
				<input type="text" placeholder="Celular do Cliente" name="celular" value="<?php echo $row['cel_usuario'];?>"  >
				
				<label for="uEmail"><b>Email</b></label>
				<input type="text" placeholder="e-mail do Cliente" name="mail" value="<?php echo $row['email_usuario'];?>"  >
				
				
				<label for="uSenha"><b>senha</b></label>
				<input type="text" placeholder="e-mail do Cliente" name="senha" value="<?php echo $row['senha_usuario'];?>"  >
					
				<input type="submit" value="Atualizar" onclick="cadastro();javascript: location.href='confirmaAlterarUsuario.php'" />

				<button type="reset" class="cancelbtn" >Limpar</button>
				<button type="reset" class="cancelbtn" style="background-color: #008CBA;" onclick="javascript: location.href='consultaUsuario.php'">Voltar</button>

			</div>
		</form>
		
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
	alert("Cliente modificado com sucesso!");
}
</script>

  </body>

</html>
			<?php
			if (!empty($_POST)) 
			{
				date_default_timezone_set('America/Sao_Paulo');
				include_once('conexao.php');
				
				$nome  = $_POST['nome'];
				$dir = "img/usuarios/"; // diretorio para as imagens
				$foto = $_FILES['imgUsuario'];
				$cpf   = $_POST['cpf']; 
				$cnpj  = $_POST['cnpj'];
				$rg    = $_POST['rg'];
				$cep   = $_POST['cep'];
				$num   = $_POST['numero'];
				$tel   = $_POST['telefone'];
				$cel   = $_POST['celular'];
				$mail  = $_POST['mail'];
				$senha  = $_POST['senha'];
				$csenha    = $_POST['csenha'];
				
				if($senha == $csenha)
				{
				
					//upload da foto
					$ext = strtolower(substr($foto['name'],-4)); //Pegando extensão do arquivo 
				
					$novo_nome = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo 
		
					move_uploaded_file($foto['tmp_name'], $dir.$novo_nome); //Fazer upload do arquivo 
					
					$caminhoIMG = $dir.$novo_nome;
				
				$stmt = $con->prepare("INSERT INTO tb_usuario(nm_usuario, 
															  ds_imagem,
														      cpf_usuario, 
															  cnpj_usuario,
														      rg_usuario, 
														      cep_usuario,
														      num_usuario,
														      tel_usuario,
														      cel_usuario,
														      email_usuario,
															  senha_usuario) 
									   VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)");
									   
				$stmt->bindParam(1,$nome);
				$stmt->bindParam(2,$caminhoIMG);
				$stmt->bindParam(3,$cpf);
				$stmt->bindParam(4,$cnpj);
				$stmt->bindParam(5,$rg);
				$stmt->bindParam(6,$cep);
				$stmt->bindParam(7,$num);
				$stmt->bindParam(8,$tel);
				$stmt->bindParam(9,$cel);
				$stmt->bindParam(10,$mail);
				$stmt->bindParam(11,$senha);
				
				$stmt->execute();
				
				
				}
				
			}
			
		?>		
		


