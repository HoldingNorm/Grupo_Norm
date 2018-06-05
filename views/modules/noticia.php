<?php include "menu.php"; ?>
<section class="container noticia-section">
	<div class="row">
		<div class="col-9">
			<?php 
				$mvc = new MvcController();
				$mvc -> noticiaController();
			?>
		</div>
		<div class="col-3">
			<h4>Redes Sociales</h4>
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FindustriasNormMx%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=181109455616756" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
		</div>
	</div>
</section>