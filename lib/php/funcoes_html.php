<?php 

function ico_notificacao($n){ //Tipo de notificação

	switch ($n) {
		case 'mensagem':
			$html ='<div class="icon-round bg-flat-color-dark-turquoise">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>';
			break;
		case 'solicitacao':
			$html ='<div class="icon-round bg-flat-color-acqua">
						<i class="fa fa-exclamation" aria-hidden="true"></i>
					</div>';
			break;
		case 'aula_proxima':
			$html ='<div class="icon-round bg-flat-color-dark-blue">
						<i class="fa fa-bullhorn" aria-hidden="true"></i>
					</div>';
			break;
		case 'aula_desmarcada':
			$html ='<div class="icon-round bg-flat-color-light-salmon">
						<i class="fa fa-calendar-times-o" aria-hidden="true"></i>
					</div>';
			break;
		case 'aula_adiada':
			$html ='<div class="icon-round bg-flat-color-medium-mustard">
						<i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
					</div>';
			break;
		case 'aula_aprovada':
			$html ='<div class="icon-round bg-flat-color-dark-green ">
						<i class="fa fa-check" aria-hidden="true"></i>
					</div>';
			break;
		case 'aula_recusada':
			$html ='<div class="icon-round bg-flat-color-dark-salmon">
						<i class="fa fa-times" aria-hidden="true"></i>
					</div>';
			break;
		
		default:
			$html ='<div class="icon-round bg-flat-color-dark-turquoise">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>';
			break;
	}

	return $html;
}

function box_notificacao($n, $t, $s, $d){ //Tipo de notificação, Título, Subtítulo, Datetime

	$html ='<div class="wrapper-line box-border">
				<div class="row">
					<div class="col-sm-2">
						'.ico_notificacao($n).'			
					</div>
					<div class="col-sm-7 content">
						<p class="title">'.$t.'</p>
						<p class="ellipsis">'.$s.'</p>
					</div>
					<div class="col-sm-3 time">
						<p>'.$d.'</p>
					</div>
				</div>		
			</div>';

	return $html;
}

function box_notificacao_full($n, $t, $s, $d){ //Tipo de notificação, Título, Subtítulo, Datetime

	$html ='<div class="wrapper-line box-border">
				<div class="row">
					<div class="col-sm-1">
						'.ico_notificacao($n).'			
					</div>
					<div class="col-sm-9 content">
						<p class="title">'.$t.'</p>
						<p>'.$s.'</p>
					</div>
					<div class="col-sm-2 time">
						<p>'.$d.'</p>
					</div>
				</div>		
			</div>';

	return $html;
}

function box_aulas($t, $m, $d){ // Título, Mensagem, Datetime
	$html ='<div class="wrapper-line box-border">
				<div class="row">
					<div class="col-sm-2">
						<img class="img-monitor img-circle" src="lib/img/profile.gif" alt="Foto monitor">		
					</div>
					<div class="col-sm-10 content">
						<div class="">
							<p class="title">'.$t.'</p>
							<p class="ellipsis-msg">'.$m.'</p>
						</div>
						<div class="details">
							<div class="row">
								<div class="col-sm-6">
									<p class="time">
										'.$d.'
									</p>
								</div>
								<div class="col-sm-6">
									<a href="#">
										<p class="show-details">Ver detalhes</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>';

	return $html;
}

function box_solicitacoes($n, $m){ //Nome, Matéria
	$html ='<div class="wrapper-line box-border">
				<div class="row">
					<div class="col-sm-6 content">
						<div class="wrapper">
							<p class="title">'.$n.'</p>
							<p class="ellipsis-msg">'.$m.'</p>
						</div>
					</div>					
					<div class="col-sm-6 content">
						<div class="wrapper">
							<div class="btn-group" role="group" aria-label="...">
								<button type="button" class="btn approve">Aprovar</button>
								<button type="button" class="btn reject">Recusar</button>
							</div>
						</div>
					</div>
				</div>		
			</div>';

	return $html;
}

?>
