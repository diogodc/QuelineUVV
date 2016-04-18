<?php 
	//Navbar
	include 'includes/navbar.php';
 ?>

<div class="wrapper-content main">
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
			<div class="col-md-10 col-sm-9">
				<section class="wrapper-page timeline light-container">
					<div class="row">						
						<div class="col-sm-12 col-md-6">
							<div class="box">
								<div class="row box-heading box-border">
									<h2>Notificações</h2>
								</div>
								<div class="box-content">
									<?php 
										//Tipo de notificação: Mensagem
										echo box_notificacao(
											'mensagem', 
											'Nova mensagem', 
											'Lorem ipsum dolor sit amet', 
											'Há 2h');

										//Tipo de notificação: Aula chegando
										echo box_notificacao(
											'aula_proxima', 
											'Uma aula está próxima!', 
											'Consectetur adipiscing elit.', 
											'Ontem, às 15h');

										//Tipo de notificação: Monitor desmarcou aula
										echo box_notificacao(
											'aula_desmarcada', 
											'Aula desmarcada', 
											'Lorem ipsum dolor sit amet', 
											'12 de abril');

										//Tipo de notificação: Monitor adiou aula
										echo box_notificacao(
											'aula_adiada', 
											'Aula adiada', 
											'Morbi finibus quam nec ex dignissim pulvinar.', 
											'12 abril');

										//Tipo de notificação: Aprovar aula
										echo box_notificacao(
											'aula_aprovada', 
											'Solicitação de aula aprovada!', 
											'Duis in nisi sit amet orci egestas gravida at quis tortor.', 
											'12 abril');

										//Tipo de notificação: Recusar aula
										echo box_notificacao(
											'aula_recusada', 
											'Solicitação de aula recusada.', 
											'Aliquam mauris tellus, hendrerit pharetra pretium et', 
											'12 abril');

										//Tipo de notificação: solicitação aula
										// * * Somente para monitores * *
										echo box_notificacao(
											'solicitacao', 
											'Nova solicitação', 
											'Aliquam mauris tellus, hendrerit pharetra pretium et', 
											'14/03/2015');
									 ?>
								</div>								
							</div>
							<!-- end /.box -->
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="box">
								<div class="row box-heading-with-tabs box-border">
									<div class ="col-sm-4 col-md-6 box-heading">
										<h2>Aulas</h2>
									</div>
									<div class ="col-sm-8 col-md-6 box-tabs">
										<ul id="tab-aulas" class="nav nav-tabs nav-justified" role="tablist"> 
										
											<li role="presentation" class="active">
												<a href="#content-aprovadas" id="tab-aprovadas" role="tab" data-toggle="tab" aria-controls="content-aprovadas" aria-expanded="true">Aprovadas</a>
											</li> 

											<li role="presentation">
												<a href="#content-recusadas" role="tab" id="tab-recusadas" data-toggle="tab" aria-controls="content-recusadas">Recusadas</a>
											</li> 
										</ul>
									</div>
								</div>
								<div class="box-content">
									<div id="content-aulas" class="tab-content"> 											
										<div role="tabpanel" class="tab-pane fade in active" id="content-aprovadas" aria-labelledby="tab-aprovadas"> 
											<?php 
												echo box_aulas(
													'João da Silva', 
													'Etiam tellus dui, scelerisque nec neque non, molestie ultricies diam. Mauris pharetra nibh et nibh accumsan ullamcorper. Mauris sed mi suscipit, porttitor leo aliquam, efficitur diam. Sed laoreet nunc id velit semper volutpat.', 
													'Há 2h');

												echo box_aulas(
													'João da Silva', 
													'Etiam tellus dui, scelerisque nec neque non, molestie ultricies diam. Mauris pharetra nibh et nibh accumsan ullamcorper. Mauris sed mi suscipit, porttitor leo aliquam, efficitur diam. Sed laoreet nunc id velit semper volutpat.', 
													'Há 2h');
											 ?>
										</div> 

										<div role="tabpanel" class="tab-pane fade" id="content-recusadas" aria-labelledby="tab-recusadas">
											<?php 
												echo box_aulas(
													'João da Silva', 
													'Etiam tellus dui, scelerisque nec neque non, molestie ultricies diam. Mauris pharetra nibh et nibh accumsan ullamcorper. Mauris sed mi suscipit, porttitor leo aliquam, efficitur diam. Sed laoreet nunc id velit semper volutpat.', 
													'Há 2h');

												echo box_aulas(
													'João da Silva', 
													'Etiam tellus dui, scelerisque nec neque non, molestie ultricies diam. Mauris pharetra nibh et nibh accumsan ullamcorper. Mauris sed mi suscipit, porttitor leo aliquam, efficitur diam. Sed laoreet nunc id velit semper volutpat.', 
													'Há 2h');
											 ?>
										</div> 
									</div>
								</div>
							</div>
							<!-- end /.box -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="box">
								<div class="row box-heading box-border">
									<h2>Monitores</h2>
								</div>
								<div class="box-content">
									<div id="content-monitores">										
										<div class="row">
											<div class="col-sm-4 col-md-6">
												<div class="text-center mnt-profile">
													<img class="img-monitor img-circle" src="lib/img/profile.gif" alt="Foto monitor">
													
													<div class="">
														<p class="title">Joana</p>
														<p class="ellipsis-msg">Monitoria de Computação Gráfica</p>
														<a href="" class="btn btn-dark">Ver detalhes</a>
													</div>
												</div>
											</div>
											<div class="col-sm-4 col-md-6">
												<div class="text-center mnt-profile">
													<img class="img-monitor img-circle" src="lib/img/profile.gif" alt="Foto monitor">
													
													<div class="">
														<p class="title">Joana</p>
														<p class="ellipsis-msg">Monitoria de Computação Gráfica</p>
														<a href="" class="btn btn-dark">Ver detalhes</a>
													</div>
												</div>
											</div>
											<div class="col-sm-4 col-md-6">
												<div class="text-center mnt-profile">
													<img class="img-monitor img-circle" src="lib/img/profile.gif" alt="Foto monitor">
													
													<div class="">
														<p class="title">Joana</p>
														<p class="ellipsis-msg">Monitoria de Computação Gráfica</p>
														<a href="" class="btn btn-dark">Ver detalhes</a>
													</div>
												</div>
											</div>
										</div>
									</div> 
								</div>
							</div>
							<!-- end /.box -->
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="box">
								<div class="row box-border">
									<div class="box-heading">
										<h2>Solicitações Pendentes</h2>
									</div>
								</div>
								<div class="box-content">
									<div id="content-solicitacoes">
										<?php 
											echo box_solicitacoes(
												'Maria', 
												'Lógica para Computação', 
												'Segunda-feira às 14 horas');
											
											echo box_solicitacoes(
												'Maria', 
												'Cálculo 1', 
												'Segunda-feira às 11 horas');
											
											echo box_solicitacoes(
												'Maria', 
												'Programação 2', 
												'Segunda-feira às 21 horas');

										 ?>
									</div>
								</div>
								<!-- end /.box-content -->
							</div>
							<!-- end /.box -->
						</div>
					</div>

				</section>		
				<!-- end /.Wrapper-page -->
			</div>
		</div>
	</div>
</div>
