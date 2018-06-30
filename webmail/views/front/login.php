<?php include ('templates/head.php'); ?>

	<div class="container spacing-top">
		<div class="row">

			<div class="col-12 bg-danger" id="borde">
				
				<fieldset>
					<legend>Formulario de Ingreso</legend>
						<form name="login" method="post" action="Controller.php">
							<p>
								<input type="email" id="radio" name="correo_log" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input type="password" id="radio" name="pass_log" placeholder="Contraseña.." required>
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">
								<input type="hidden" name="password" value="<?php echo $password; ?>">

								<input type="submit" name="btn-login" value="Ingresar">
								<input type="reset" value="Cancelar">
							</p>
						</form>
					</fieldset>

			</div>

		</div>
	</div>
	<script>
		function cambiar(){
			document.getElementById('genre').style.FontZise = '5px';
		}
		function establecer(){
			document.getElementById('genre').style.FontZise = '10px';
		}
		function todo(){
			document.getElementById('genre').addEventsListener('click',cambiar);
			document.getElementById('genre').addEventsListener('blur',establecer);
		}
	</script>

 <script>
		alert('¿quieres continuar?');
	</script>
<?php include ('templates/foot.php'); ?>