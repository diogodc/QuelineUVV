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

<div class="wrapper-content solicitacoes">
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
				<section class="wrapper-page perfil light-container">
					<div class="row">	
						<div class="col-xs-12">					
							<div class="box">
								<div class="row box-heading box-border">
									<h2>Notificações</h2>
								</div>
								<div class="box-content">
									<?php 

										//Tipo de notificação: Mensagem
										echo box_notificacao_full(
											'mensagem', 
											'Nova mensagem', 
											'Lorem ipsum dolor sit amet', 
											'Há 2h');

										//Tipo de notificação: Aula chegando
										echo box_notificacao_full(
											'aula_proxima', 
											'Uma aula está próxima!', 
											'Consectetur adipiscing elit.', 
											'Ontem, às 15h');

										//Tipo de notificação: Monitor desmarcou aula
										echo box_notificacao_full(
											'aula_desmarcada', 
											'Aula desmarcada', 
											'Lorem ipsum dolor sit amet', 
											'12 de abril');

										//Tipo de notificação: Monitor adiou aula
										echo box_notificacao_full(
											'aula_adiada', 
											'Aula adiada', 
											'Morbi finibus quam nec ex dignissim pulvinar.', 
											'12 abril');

										//Tipo de notificação: Aprovar aula
										echo box_notificacao_full(
											'aula_aprovada', 
											'Solicitação de aula aprovada!', 
											'Duis in nisi sit amet orci egestas gravida at quis tortor.', 
											'12 abril');

										//Tipo de notificação: Recusar aula
										echo box_notificacao_full(
											'aula_recusada', 
											'Solicitação de aula recusada.', 
											'Aliquam mauris tellus, hendrerit pharetra pretium et', 
											'12 abril');

										//Tipo de notificação: solicitação aula
										// * * Somente para monitores * *
										echo box_notificacao_full(
											'solicitacao', 
											'Nova solicitação', 
											'Nullam porttitor risus mi, at facilisis ligula auctor vitae. Curabitur enim dui, aliquam in tempus at, tincidunt eget mi. Pellentesque in pharetra neque. 
											Curabitur eu interdum felis, ut volutpat justo. 
											Aliquam semper tellus id nisi pulvinar, non elementum magna vulputate. Pellentesque pretium velit diam, vitae pellentesque dui malesuada non. Pellentesque in velit sodales, lobortis risus sed, iaculis nisl. ', 
											'14/03/2015');
									 ?>
								</div>								
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