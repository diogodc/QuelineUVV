<?php 

	$solicitacoes = array();
	$sql = "SELECT 
				s.*, 
				a.nome as nome_aluno,
				m.nome as nome_materia
			FROM solicitacao s
			INNER JOIN aluno a ON s.id_aluno = a.id_aluno
			INNER JOIN materia m ON s.id_materia = m.id_materia
			WHERE a.id_aluno = '".$_SESSION['aluno']."'";
	$sql = mysql_query($sql) or die(mysql_error());

	while ($linha = mysql_fetch_assoc($sql)) {
		$solicitacoes[] = $linha;
	}

	#----------------------------------------------------------------------------------------------------#

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

											foreach ($solicitacoes as $linha) {
												echo box_solicitacoes($linha['nome_aluno'], $linha['nome_materia']);
											}

											echo box_solicitacoes(
												'João da Silva', 
												'Cálculo 1');
											echo box_solicitacoes(
												'Maria Joaquina', 
												'Estrutura de Dados');
											echo box_solicitacoes(
												'José Maromba', 
												'Peteca 4');

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
