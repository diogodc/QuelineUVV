<div class="wrapper-login">
	<div class="container">
		<div class="login center-block">
			<div class="row">
				<div class="center-block logo"></div>
				<form class="center-block" name="form-login" action="index.php" method="post">
					<div class="form-group">
						<label for="matricula">Matrícula: </label>
						<input id="matricula" class="form-control" name="matricula" type="text" tabindex="0">
					</div>
					<div class="form-group">
						<label for="senha">Senha: </label>
						<input id="senha" class="form-control" name="senha" type="password">
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