<?php

session_start();

include('templates/head.php');
"<br>";

?>

<center>
<fieldset>
<br>
<br>
<br>

	<legend>TUS DATOS</legend>

<div class="row">
<div class="col-sm">
    <span class="border border-dark">
	<?php 

	if(isset($_SESSION['usuario'])){
		
		echo '<h2>Tu nombre es : ', $_SESSION['usuario']. '</h2>' ;
	}

	?>
    </span>
    <span class="border border-secondary">
	<div class="col">

	<?php 

	if(isset($_SESSION['genero'])){
		echo '<h2>Tu genero es : ', $_SESSION['genero']. '</h2>';
	}
	
	?>
    </span>
    <span class="border border-secondary">
	<div class="col">
	<?php 

	if(isset($_SESSION['email'])){
		echo '<h2>Tu correo es : ', $_SESSION['email']. '</h2>';
	}
	
	?>
    </span>
<br>
<br>
<br>
</fieldset>
<center>


<?php
include('templates/foot.php');
?>



					