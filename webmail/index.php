<?php 
//Encabezado de la pagina
include ('views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>

<div class="container spacing-top">
	<div class="row">
		<div class="col-6 bg-dark">

			<center>
				<h1 class="title-h1">A R C A D E</h1>
				<figure>
					<img src="http://localhost/webmail/public/images/ar.png" class="img-email">
				</figure>
			</center>

		</div>
		<div class="col-6 bg-danger">
			<fieldset>
					<legend>Formulario de Registro</legend>
						<form name="register" method="post" action="app/Http/Controllers/Controller.php">
							<p>
								<select name="genre" id="radio" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
								<input type="text" id="radio" name="nombre" placeholder="Nombre completo.." required>
							</p>
							<p>
								<input type="email" id="radio" name="correo" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input type="password" id="radio" name="password" placeholder="Contraseña.." required>
							</p>
							<p>
								<input type="password" id="radio" name="conf_pass" placeholder="Confirmar contraseña.." required>
							</p>
							<p>
								<input type="submit" id="radio" name="btn-register" value="Registrar usuario">
								<input type="reset" id="radio" value="Limpiar datos">
							</p>
						</form>
			</fieldset>
			<p><a href="http://localhost/webmail/views/front/login.php" class="registrado">Ya estoy registrado!</a></p>
		</div>
	</div>
</div>

<?php include ('views/front/templates/foot.php'); ?>