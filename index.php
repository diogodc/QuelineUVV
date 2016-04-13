<?php 
	session_start();
	ob_start();
	error_reporting(0);
	include 'conecta.php'; 
	//Conecta no banco do sistema 
?> 

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		

		<!-- Bootstrap - Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Bitter:400,700|Open+Sans:400,300' rel='stylesheet' type='text/css'>

		<!-- Custom styles -->
		<link  rel="stylesheet" href="<?php echo $path;?>/lib/css/styles.css">

		<!-- Sweet Alert -->
		<link rel="stylesheet" type="text/css" href="<?php echo $path;?>/lib/plugins/sweetalert-master/dist/sweetalert.css">
		<script src="<?php echo $path;?>/lib/plugins/sweetalert-master/dist/sweetalert.min.js"></script>
	</head>

	<body>
		<?php 

			if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['matricula']) && !empty($_POST['senha'])) {
				
				$senha = stripslashes($_POST['senha']);
				$senha = mysql_real_escape_string($_POST['senha']);
				$matricula = stripslashes($_POST['matricula']);
				$matricula = mysql_real_escape_string($_POST['matricula']);

				$sql = "SELECT * FROM alunos WHERE matricula = '".$matricula."' AND senha = '".$senha."' ";
				$sql = mysql_query($sql) or die(mysql_error());

				$count_sql = mysql_num_rows($sql); //conta a quantidade de linhas do resultado da consulta

				$aluno = array();

				//Login Correto
				if ($count_sql == 1) {

					$aluno = mysql_fetch_assoc($sql);
					$_SESSION['aluno'] = $aluno['id_aluno'];
					$_SESSION['nome_aluno'] = $aluno['nome'];
					include 'main.php';
				}

				//Login Incorreto
				else{
					$msg = "<script>swal('Erro!','Matricula ou senha incorretos','error')</script>";
					include 'login.php';
				}
			}
			else{
				if (empty($_SESSION['aluno'])) {
					include 'login.php';
				}
				else{
					include 'main.php';
				}
			}
		?>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


		<!-- Custom JS -->
		<link  rel="stylesheet" href="<?php echo $path;?>/lib/js/utils.js">

	</body>
</html>