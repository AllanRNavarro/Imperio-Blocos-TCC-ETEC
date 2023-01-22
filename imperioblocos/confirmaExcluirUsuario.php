<title>window.location ao clicar em um botão</title>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Império Blocos</title>
<link rel="shortcut icon" href="img/logorodape.png" />
<script type="text/javascript">

	window.location="consultaUsuario.php";

</script>
</head>
<body>

</body>
</html>>

<?php

$cod = $_GET['codigo'];


include_once('conexao.php');
	try 
	{
		   
		$delete = $con->prepare("DELETE FROM tb_usuario WHERE cd_usuario=$cod");
		$delete->execute();
		echo "<h1>usuario excluido com sucesso</h1>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>

 
 
 
 
 
 
 
 
 
