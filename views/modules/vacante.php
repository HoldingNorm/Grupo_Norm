<?php include "menu.php"; ?>
<section class="container section-vacante--head">
	<?php 
		$mvc = new MvcController();
		$mvc -> vacanteController();
	?>
</section>
