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
 <script type="text/javascript" src="bootstrap-4.3.1-dist/js/jquery.js"></script>
        
        <script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script> 
  </head>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<?php
// Verifica se existe a variável txtnome
if (isset($_GET["txtnome"])) {
    $nome = $_GET["txtnome"];
    // Conexao com o banco de dados
    $server = "localhost:3307";
    $user = "root";
    $senha = "usbw";
    $base = "sistema";
    $conexao = mysql_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);
    // Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "SELECT * FROM tb_ususario";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM tb_usuario WHERE nm_usuario like '$nome'";
    }
    sleep(1);
    $result = mysql_query($sql);
    $cont = mysql_affected_rows($conexao);
    // Verifica se a consulta retornou linhas 
    if ($cont > 0) {
        // Atribui o código HTML para montar uma tabela

        $tabela = "<table class='table table-dark'>
                    <thead>
                        <tr>
							<th scope='cool'>CODIGO</th>
                            <th scope='col'>NOME</th>
                            <th scope='col'>CPF</th>
							<th scope='col'>CNPJ</th>
                            <th scope='col'>RG</th>
                            <th scope='col'>CEP</th>
							<th scope='col'>Nº</th>
							<th scope='col'>Telefone</th>
							<th scope='col'>Celular</th>
							<th scope='col'>Email</th>
							<th scope='col'>senha</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr  scope='row'>";
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysql_fetch_array($result)) {
			$return.= "<td scope='row'>" . utf8_encode($linha["cd_usuario"]) . "  </td>";
            $return.= "<td >" . utf8_encode($linha["nm_usuario"]) . "  </td>";
            $return.= "<td> " . utf8_encode($linha["cpf_usuario"]) . " </td>";
			$return.= "<td> " . utf8_encode($linha["cnpj_usuario"]) . " </td>";
            $return.= "<td> " . utf8_encode($linha["rg_usuario"]) . "  </td>";
            $return.= "<td> " . utf8_encode($linha["cep_usuario"]) . "  </td>";
			$return.= "<td> " . utf8_encode($linha["num_usuario"]) . "  </td>";
			$return.= "<td> " . utf8_encode($linha["tel_usuario"]) . "  </td>";
			$return.= "<td> " . utf8_encode($linha["cel_usuario"]) . "  </td>";
			$return.= "<td> " . utf8_encode($linha["email_usuario"]) . "  </td>";
			$return.= "<td> " . utf8_encode($linha["senha_usuario"]) . "  </td>";	
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "<center>Não foram encontrados registros!</center>";
    }
}
?>
