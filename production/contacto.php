<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="UTF-8">
	<link rel="icon" href="images/favicon1.png">
	<title>contacto flysim</title>
</head>

<body class="contactar">	

	<?php include('header.php') ?>
	<section>
		<h2 >contacto</h2>
		<div class="hero">
			<div class="row">
				<div class="map">
					<iframe height="300" src="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d196904.76222220433!2d-0.6793957805341231!3d39.545242188556486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0xd605a9bc7c9e7d1%3A0xf02af6fd4cf52e0!2sAeropuerto+Valencia-Manises%2C+Manises!3m2!1d39.492429!2d-0.47486199999999995!4m5!1s0xd60f5d976d487ed%3A0x1eaac44973c3a2ca!2sCalle+de+la+Pea%2C+Vilamarxant!3m2!1d39.576445!2d-0.632485!5e1!3m2!1ses!2ses!4v1403744346564"  frameborder="0" style="border:0">
					</iframe>
				</div>
			</div>
		</div>

		<form id="reserva_form" action="reservas.php" method= "post">

			<ul>
				<li>
					<span class="msg"></span>
				</li>
				<li>
					<label>Nombre : </label>
					<input type="text" name="nombre" value="" required/>
				</li>
				<li>
					<label>Tlfn : </label>
					<input type="tel" name="tel">
				</li>
				<li>
					<label>correo@ : </label>
					<input type="text" name="address" >
				</li>
				<li>
						<textarea rows="2" cols="150" placeholder='Solicite información'></textarea>
					</li>
				<li>

					<input class="actioner" type="submit" value="confirm"/>
				</li>
				<li>

					<input class="actioner" type="reset" value="resset">
				</li>
			</ul>
			
		</form>
	</section>
	<script src="js/varios.min.js"></script>
	<script src="js/jquery-2.0.3.min.js"></script>
</body>
</html>