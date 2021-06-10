<?php
        include 'server.php';
?>
<html>
	<head>
		<title>AECompany</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="scripts/principal.js"></script>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="qui_som.css">
	</head>
	<body>
		<div id="div_login">
			<div class="tancar tancar_login">
				<button>X</button>
			</div>
			<h3>Inici de Sessió</h3>
			<div class="formulari login_form">
				<form method="post" action="index.php">
					<label for="uname"><b>Usuari</b></label>
					<input name="usuari_login" class="inputs login_usuari" type="text" placeholder="root" required>
					<label for="psw"><b>Contrasenya</b></label>
					<input name="contrasenya_login" class="inputs login_contrasenya" type="password" placeholder="********" required>
					<button type="submit" name="log_usuari">Iniciar Sessió</button>
				</form>
			</div>
			<div class="pregunta no_registrat">
				<p>No estàs registrat encara? Fes clic <strong><a href="#">aqui</a></strong></p>
			</div>
		</div>
		<div id="div_register">
                        <div class="tancar tancar_register">
                                <button>X</button>
                        </div>
                        <h3>Registre</h3>
                        <div class="formulari register_form">
                                <form method="post" action="index.php">
                                        <label for="uname"><b>Usuari</b></label>
                                        <input class="inputs register_usuari" name="usuari_register" type="text" placeholder="root" required>
                                        <label for="psw"><b>Contrasenya</b></label>
                                        <input class="inputs register_contrasenya" name="contrasenya_register" type="password" placeholder="********" required>
                                        <button type="submit" name="reg_usuari">Registrar-se</button>
                                </form>
                        </div>
                        <div class="pregunta no_login">
                                <p>Ja tens un compte? Fes clic <strong><a href="#">aqui</a></strong></p>
			</div>
		</div>
		<nav>
                       	<a id="logo" href="http://www.aecompany.com"><img src="imatges/logo.png"></a>
       	               	<div id="menu">
                               	<ul>
                                   	<li><a href="#">Qui som?</a></li>
                                       	<li><a href="http://www.aecompany.com/serveis.php">Serveis</a></li>
               	                </ul>
                        </div>
			<div id="opcions_login">
				<a href="#" id="login">Iniciar Sessió</a>
				<a href="#" id="register">Registrar-se</a>
               	        </div>
               	</nav>
		<div id="qui_som_contenidor">
			<div id="contenidor_contenidor">
				<h2>QUI SOM</h2>
				<p>AE Company és una empresa especialitzada en els serveis i recursos online, en la nostre pagina web podem trobar tots el serveis que oferim al client que son emmagatzematge al nuvol, VPN per cifratge de ipsec i servei de correu, també tenim soport tecnic per si teniu qualsevol dubte/problema amb els serveis no dubtis en contactar. Les nostres instal·lacions estan situades en Barcelona on tenim tota la maquinaria i treballen els soports tecnics i administradors de la pàgina web</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47896.49641854385!2d2.0636220553827416!3d41.384272767466186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a49816718e30e5%3A0x44b0fb3d4f47660a!2sBarcelona!5e0!3m2!1sen!2ses!4v1621939029200!5m2!1sen!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</body>
