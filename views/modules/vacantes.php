<?php include "menu.php"; ?>
<section class="container">
	<div class="row">
		<div class="col-12">
			<h2 class="tittle-h">Vacantes Disponibles</h2>
			<p class="text-center">Unete a nuestro equipo de trabajo en alguna de nuestras diferentes empresas</p><br>
		</div>
	</div>
	<div class="row list-vacantes align-items-end">
		<?php 
			$mvc = new MvcController();
			$mvc -> vacantesController();
		?>
	</div>
</section>