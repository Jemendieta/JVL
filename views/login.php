<!DOCTYPE html>
<!-- Indica que el documento es de tipo HTML5 -->
<html lang="en"> 
<head>
	<!-- Define el conjunto de caracteres para el documento -->
	<meta charset="UTF-8"> 
	<!-- Indica que el documento es compatible con IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<!-- Configura la vista para dispositivos móviles -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- Establece conexión previa con Google Fonts para mejorar el rendimiento -->
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<!-- Establece conexión previa con Google Fonts para cargar fuentes -->
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<!-- Importa la fuente 'Quicksand' desde Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet"> 
	<!-- Enlaza el archivo de estilos CSS principal -->
	<link rel="stylesheet" href="asset/css/styles.css"> 
	<!-- Establece el favicon del sitio -->
	<link rel="shortcut icon" type="image/x-icon" href="asset/images/LOGOELA.png"> 
	<!-- Título de la pestaña del navegador -->
	<title>COLEGIO I.E. ELA</title> 
	<!-- Enlaza el archivo de estilos CSS para toastr, una librería de notificaciones -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
	<!-- Carga la librería jQuery desde un CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	<!-- Carga la librería toastr desde un CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 
	<!-- Enlaza el archivo de script JavaScript personalizado -->
	<script src="asset/js/script.js"></script>
</head>

<body>
	<!-- Contenedor para el spinner de carga (se puede utilizar para mostrar un indicador de carga) -->
	<div id='spinner'></div> 
	<!-- Incluye mensajes de sistema (probablemente para mostrar errores o alertas) -->
	<?php include('controllers/msjs.php'); ?> 
	<!-- Contenedor principal para el contenido del formulario de inicio de sesión -->
	<div class="contenedor"> 
		<!-- Columna izquierda donde se coloca el formulario -->
		<div class="columna-izquierda"> 
			<!-- Sección de registro activa -->
			<div class="registro activo" id="registro"> 
				<div class="header">
					<!-- Título del formulario -->
					<h1>¡Iniciar sesión!</h1> 
					<!-- Línea separadora -->
					<p> - - - - - - - - - - - - - - - -</p> 
				</div>
				<!-- Formulario para iniciar sesión -->
				<form class="formulario" name="formulario" action="index.php?action=login" method="POST"> 
					<!-- Etiqueta para el campo de usuario -->
					<label for="nombre">Usuario</label> 
					<div class="contenedor-input">
						<!-- Icono de usuario -->
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
							<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
							<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
						</svg>
						<!-- Campo de entrada para el nombre de usuario -->
						<input type="text" name="nombreUser" id="nombreUser" required="true" autofocus="autofocus"> 
					</div>

					<!-- Etiqueta para el campo de contraseña -->
					<label for="password">Contraseña</label>
					<div class="contenedor-input" style="display: flex; align-items: center;">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
							<path d="M8 1a3 3 0 0 0-3 3v3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-1V4a3 3 0 0 0-3-3zm-1 6V4a1 1 0 0 1 2 0v3H7z"/>
						</svg>
						<input type="password" name="password" id="password" required style="flex-grow: 1;">
						<!--<span onclick="togglePassword()" style="cursor:pointer; margin-left: 10px;">👁️</span> <!-- Ícono de ojo para mostrar/ocultar -->
					</div>

					<!-- Contenedor para el botón de inicio de sesión -->
					<div class="contenedor-boton">
						<!-- Botón de envío del formulario -->
						<input type="submit" value="Ingresar" id="btn-login"> 
					</div>
				</form>
			</div>
		</div>
		<!-- Columna derecha, actualmente vacía -->
		<div class="columna-derecha"> 
			<!-- Sección de la columna derecha, actualmente vacía -->
		</div>
	</div>
</body>
</html>