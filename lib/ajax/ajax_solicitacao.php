<?php 

	include('../../conecta.php');

	$sql = "UPDATE solicitacao SET status = '".$_POST['status']."' WHERE id_solicitacao = '".$_POST['id']."'";
	$sql = mysql_query($sql);

?>