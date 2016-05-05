<?php 
	//Navbar
	include 'includes/navbar.php';
 ?>

<div class="wrapper-content perfil">
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
						<?php //Contato ?>
						<article class="col-md-12 col-lg-6">
							<div class="box contact">
								<div class="row box-heading box-border">
									<h2>Contato</h2>
								</div>
								<div class="box-content">
									<div class="main-information">
										<h2>Fulano da Silva</h2>
										<h3>Curso x</h3>
									</div>
									
									<div class="contact-wrapper">
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-lg-12">
												<?php //Email ?>
												<div class="row">
													<div class="col-xs-1 col-sm-2 col-lg-1">
														<i class="fa fa-envelope"></i>
													</div>
													<div class="col-xs-11 col-sm-10 col-lg-11">
														<p>fulaninho_com_cam@email.com</p>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-lg-12">
												<div class="row">
													<div class="col-xs-1 col-sm-2 col-lg-1">
														<i class="fa fa-envelope-o"></i>
													</div>
													<div class="col-xs-11 col-sm-10 col-lg-11">
														<p>fulaninho_profissional@email.com</p>
													</div>
												</div>
											</div>
											
											<?php  //Tentar mudar as linhas para esse código depois : 
											
												/*<div class="col-xs-12 col-sm-6 col-lg-12">
													<div class="row">
														<?php //Email ?>
														<div class="col-sm-12 col-lg-6">
															<div style="display: -webkit-inline-box;">
																<i class="fa fa-envelope"></i>
																<p>fulaninho_com_cam@email.com</p>
															</div>
														</div>
												
														<div class="col-sm-12 col-lg-6">
															<div style="display: -webkit-inline-box;">
																<i class="fa fa-envelope-o"></i>
																<p>fulaninho_profissional@email.com</p>
															</div>
														</div>
													</div>
												</div> */
											 ?>

											<div class="col-xs-12 col-sm-6 col-lg-12">
												<?php //Celular ?>
												<div class="row">
													<div class="col-xs-1 col-sm-2 col-lg-1">
														<i class="fa fa-mobile"></i>
													</div>
													<div class="col-xs-11 col-sm-10 col-lg-11">
														<p>27 9-9999-9999</p>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-lg-12">
												<?php //Celular ?>
												<div class="row">
													<div class="col-xs-1 col-sm-2 col-lg-1">
														<i class="fa fa-phone"></i>
													</div>
													<div class="col-xs-11 col-sm-10 col-lg-11">
														<p>27 3333-0000</p>
													</div>
												</div>
											</div>
										</div>
										
										<div class="social">
											<?php //Outras formas de contato ?>
											<div class="row">
												<?php //Facebook ?>
												<div class="col-xs-1">
													<div class="icon-round icon-round-sm icon-round-o">
														<a href="https://www.facebook.com/ana.fail"><i class="fa fa-facebook"></i></a>
													</div>
												</div>
												<?php //Twitter ?>
												<div class="col-xs-1">
													<div class="icon-round icon-round-sm icon-round-o">
														<a href="https://twitter.com/xuxameneghel_"><i class="fa fa-twitter"></i></a>
													</div>
												</div>

												<?php //Ver outra rede social interessante de colocar aqui. será opcional adicionar isso nas configuracoes ?>
											</div>
										</div>
									</div>									
								</div>								
							</div>
						</article>
						<!-- end /.box -->

						<div class="col-md-12 col-lg-6">

							<div class="box subject">
								<div class="row box-heading box-border">
									<h2>Matérias</h2>
								</div>
								<div class="box-content">
									<?php //Linha do box ?>
									<div class="wrapper-line">
										<div class="row">
											<div class="col-sm-2">
												<p class="turma">TT1</p>
											</div>
											<div class="col-sm-10">
												<div class="row">
													<div class="col-sm-6">
														<p class="materia">Matéria 1</p>
													</div>
													<div class="col-sm-6">
														<p class="professor">Professor x</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php //Fim: primeira linha do box ?>
									
									<?php //Linha do box ?>
									<div class="wrapper-line">
										<div class="row">
											<div class="col-sm-2">
												<p class="turma">TT1</p>
											</div>
											<div class="col-sm-10">
												<div class="row">
													<div class="col-sm-6">
														<p class="materia">Matéria 2</p>
													</div>
													<div class="col-sm-6">
														<p class="professor">Professor y</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php //Fim: segunda linha do box ?>

									<?php //Linha do box ?>
									<div class="wrapper-line">
										<div class="row">
											<div class="col-sm-2">
												<p class="turma">TT1</p>
											</div>
											<div class="col-sm-10">
												<div class="row">
													<div class="col-sm-6">
														<p class="materia">Matéria 3</p>
													</div>
													<div class="col-sm-6">
														<p class="professor">Professor z</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php //Fim: terceira linha do box ?>

								</div>								
							</div>
						</div>
					</div>
				</section>		
				<!-- end /.Wrapper-page -->
			</div>
		</div>
	</div>
</div>
