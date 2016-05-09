<?php 
	//Navbar
	include 'includes/navbar.php';
 ?>
 
<div class="wrapper-content monitores">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 col-sm-3 hidden-xs">
				<div class="row bg-flat-color-light-gray dark-container">
					<?php 
						//Aside
						include 'includes/aside.php';
					 ?>
				</div>
			</div>
<!-- 			
				<h3>Exibição Lista de Monitores: Cada box é um link para o perfil do monitor</h3>
				<h2>Imagem - Nome - Curso - Matéria da monitoria - Botão para solicitar aula</h2>
 -->			
 				<div class="col-md-10 col-sm-9">				
				<section class="wrapper-page monitores light-container">
					<div class="box">
						<div class="row box-heading box-border">
							<h2>Monitores</h2>
						</div>
						<div class="box-content">
							<div class="wrapper-line box-border">
								<div class="row">	

									<div class="hidden-xs col-sm-2 col-lg-1">
										<?php //Imagem do monitor ?>
										<img class="img-monitor img-circle" src="lib/img/profile.gif" alt="Foto monitor">
									</div>
									<div class="col-sm-10 col-lg-11">
										<div class="row">
											<?php //Nome ?>
											<div class="col-sm-12">
												<h3 class="main-info">Fulano Beltranisson, <small>Sistemas de Informação</small></h3>
											</div>
										</div>
										<div class="row">
											<?php //Dados ?>
											<div class="col-md-8">
												<?php //Materia da monitoria ?>
												<h4 class="materia">Programação e Implementação de Banco de Dados</h4>
											</div>
											<div class="col-md-4">
												<?php //Botao solicitar aula ?>
												<a href="#" class="btn btn-dark">Solicitar Aula</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php //Fim /.box-content ?>
					</div>
				</section>		
				<!-- end /.Wrapper-page -->
			</div>
		</div>
	</div>
</div>
