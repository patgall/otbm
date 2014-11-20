<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<?php echo Asset::css('bootstrap.css'); ?>
		<?php echo Asset::css('docs.min.css'); ?>
		<style>
			#logo{
				display: block;
				width: 179px;
				height: 45px;
				position: relative;
				top: 15px;
			}
			.jumbotron{
				color: #000;
				height: 150px;
				margin-top: 10px;
			}
		</style>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
		<?php echo Asset::js('bootstrap.min.js'); ?>
		<?php echo Asset::js('common.js'); ?>
	</head>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1 style="margin-top: -20px;">
				<?php echo Html::anchor($link_header, $main_title, array('style' => 'text-decoration: none;color:black;'));?>
				</h1>
				<p><?php echo $sub_title; ?></p>
				<div class="row">
					<div class="col-md-4">.col-md-4</div>
					<div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
				</div>
			</div>
			<?php if (Session::get_flash('success')): ?>
				<div class="alert alert-success">
					<strong>Succès</strong>
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
					</p>
				</div>
	<?php endif; ?>
	<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-error">
					<strong>Erreur</strong>
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
					</p>
				</div>
	<?php endif; ?>
	<?php if (Session::get_flash('warning')): ?>
				<div class="alert alert-warning">
					<strong>Erreur</strong>
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('warning'))); ?>
					</p>
				</div>
	<?php endif; ?>
	<?php if (Session::get_flash('info')): ?>
				<div class="alert alert-info">
					<strong>Information</strong>
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('info'))); ?>
					</p>
				</div>
	<?php endif; ?>
			<?php echo $content; ?>
			<hr />
			<footer>
				<p class="pull-right"><?php echo Html::anchor('admin/', 'Admin', array('class' => 'btn btn-danger', 'style' => 'padding-top: 5px;')); ?></p>				
					<?php if (Auth::check())
						{							
							echo '<div class="btn-group pull-right" style="padding-right: 10px;">';
							echo Html::anchor('util/logout', 'Déconnexion', array('class' => 'btn btn-warning', 'style' => 'padding-top: 5px;'));
							echo Html::anchor('util/compte', 'Mon compte', array('class' => 'btn btn-default', 'style' => 'padding-top: 4px;'));
							echo '</div>';
						}
					?>
				<p class="pull-right">					
					<?php if (!isset($index)) {
						echo Html::anchor('/', 'Retour Accueil', array('class' => 'btn btn-link'));
					} ?>
				<p>
					<div class="btn-group btn-group-xs">
						<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
							Crédits
						</button>
					</div>
					<small>Propulsé par FuelPHP <?php echo Fuel::VERSION; ?></small>
				</p>
			</footer>
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Crédits</h4>
					</div>
					<div class="modal-body">
						Réalisation :<br />
						Nicolas Le Gall - Baptiste Lenouvel - Loick Pelet - Patrice Gall
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>