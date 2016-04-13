<?php 
	//Navbar
	include 'includes/navbar.php';
 ?>

<div class="wrapper-content main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-4 col-lg-3 hidden-xs">
				<div class="row bg-flat-color-light-gray dark-container">
					<?php 
						//Aside
						include 'includes/aside.php';
					 ?>
				</div>
			</div>

			<div class="col-sm-9 col-md-8 col-lg-9">
				<section class="wrapper-page timeline light-container">
					<div class="notifications wrapper">
						<div class="row">
							<div class="col-sm-6">
								<div class="box">
									<div class="row box-heading box-border">
										<h2>Notificações</h2>
									</div>
									<div class="box-content">
										<?php 
											//Tipo de notificação: Mensagem
											echo box_notificacao('mensagem', 'Nova mensagem', 'Lorem ipsum dolor sit amet', 'Há 2h');

											//Tipo de notificação: Aula chegando
											echo box_notificacao('aula_proxima', 'Uma aula está próxima!', 'Consectetur adipiscing elit.', 'Ontem, às 15h');

											//Tipo de notificação: Monitor desmarcou aula
											echo box_notificacao('aula_desmarcada', 'O seu monitor desmarcou uma aula', 'Lorem ipsum dolor sit amet', '12 de abril');

											//Tipo de notificação: Monitor adiou aula
											echo box_notificacao('aula_adiada', 'O seu monitor adiou uma aula', 'Morbi finibus quam nec ex dignissim pulvinar.', '12 abril');

											//Tipo de notificação: Aprovar aula
											echo box_notificacao('aula_aprovada', 'Solicitação de aula aprovada!', 'Duis in nisi sit amet orci egestas gravida at quis tortor.', '12 abril');

											//Tipo de notificação: Recusar aula
											echo box_notificacao('aula_recusada', 'Solicitação de aula recusada.', 'Aliquam mauris tellus, hendrerit pharetra pretium et', '12 abril');

											//Tipo de notificação: solicitação aula
											// * * Somente para monitores * *
											echo box_notificacao('solicitacao', 'Nova solicitação', 'Aliquam mauris tellus, hendrerit pharetra pretium et', '14/03/2015');
										 ?>

									</div>								
								</div>
								<!-- end /.box -->
							</div>
							<div class="col-sm-6">
								<div class="box">
									<div class="row box-heading-with-tabs box-border">
										<div class ="col-sm-6 box-heading">
											<h2>Aulas</h2>
										</div>
										<div class ="col-sm-6 box-tabs">
										
										</div>
									</div>
									<div class="box-content">

										<?php 
											//Inserir conteúdo aqui
										 ?>
										 
									</div>
								</div>
								<!-- end /.box -->
							</div>
						</div>
					</div>
					<div class="notifications wrapper">
						<div class="row">
							<div class="col-sm-12">
								<div class="box">
									<div class="row box-heading box-border">
										<h2>Monitores</h2>
									</div>
									<div class="box-content">

										<?php 
											//Inserir conteúdo aqui
										 ?>
										 
									</div>
								</div>
								<!-- end /.box -->
							</div>
						</div>
					</div>
				</section>
				<!-- end /.Wrapper-page -->
			</div>
		</div>
	</div>
</div>
