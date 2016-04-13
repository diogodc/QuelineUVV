<div class="wrapper-login">
	<div class="container">
		<div class="login center-block">
			<div class="row">
				<div class="text-center">
					<img class="logo" src="lib/img/logo-hermes-yellow.png" alt="Logo">
				</div>
				<form class="center-block" name="form-login" action="index.php" method="post">
					<div class="input-group">
						<span class="input-group-addon glyphicon glyphicon-user" aria-describedby="matricula"></span>
						<input id="matricula" placeholder="Matrícula" class="form-control" name="matricula" type="text" tabindex="0">
					</div>
					<div class="input-group">
						<span class="input-group-addon glyphicon glyphicon-lock" aria-describedby="senha"></span>
						<input id="senha" placeholder="Senha" class="form-control" name="senha" type="password">
					</div>
					<input type="submit" role="button" class="form-control btn" id="enviar-login" name="enviar-login" value="Enviar">
				</form>
			</div>
		</div>
	</div>


	<p>
		<?php 
			//Se o login falhar, exibe a mensagem:
			echo $msg; 
		?>
	</p>
</div>