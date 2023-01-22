<title>window.location ao clicar em um botão</title>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Império Blocos</title>
<link rel="shortcut icon" href="img/logorodape.png" />
<script type="text/javascript">

	window.location="suacontamenu.php";

</script>
</head>
<body>

</body>
</html>
<?php

$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];
$rg = $_POST['rg'];
$cep = $_POST['cep'];
$num = $_POST['numero'];
$tel = $_POST['telefone'];
$cel = $_POST['celular'];
$email = $_POST['mail'];
$senha= $_POST['senha'];

include_once('conexao.php');
	try 
	{
		   
		$stmt = $con->prepare('UPDATE tb_usuario SET nm_usuario = :nome,
													 cpf_usuario = :cpf,
													 cnpj_usuario = :cnpj,
													 rg_usuario = :rg,
													 cep_usuario = :cep,
													 num_usuario = :num,
													 tel_usuario = :tel,
													 cel_usuario = :cel,
													 email_usuario = :email,
													 senha_usuario = :senha
								WHERE cd_usuario = :id');
		
		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
							 ':cpf' => $cpf,
							 ':cnpj' => $cnpj,
							 ':rg' => $rg,
							 ':cep' => $cep,
							 ':num' => $num,
							 ':tel' => $tel,
							 ':cel' => $cel,
							 ':email' => $email,
							 ':senha' => $senha));
     
		
	} 
	catch(PDOException $e) 
	{
		echo 'Error: ' . $e->getMessage();
	}
	
 ?>
 