<?php include "menu.php"; ?>
<section class="container section-login">
	<div class="row justify-content-center align-items-center">
		<div class="col-4">
			<img src="views/images/logo.png" alt="" class="img-fluid">
			<form method="POST">
				<div class="form-group">
					<input class="form-control" type="text" name="user" placeholder="Usuario">
				</div>
				<div class="form-group">
					<input class="form-control" type="password" name="password" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="submit" value="login" name="login">
				</div>
				<?php 
					$mvc = new MvcController();
					$mvc -> loginController();
				?>
			</form>
		</div>
	</div>
</section>