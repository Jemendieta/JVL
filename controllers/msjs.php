<!--- MENSAJES -->
<?php
// Error de Login: si la solicitud contiene 'b', se muestra un mensaje de error indicando que las credenciales son incorrectas.
if(isset($_REQUEST['b'])){ ?>
<script type='text/javascript'>
toastr.options = {
  "closeButton": true,               // Muestra un botón de cierre en el mensaje.
  "debug": false,                    // Desactiva el modo de depuración.
  "newestOnTop": true,               // Muestra los mensajes nuevos en la parte superior.
  "progressBar": true,               // Activa la barra de progreso en los mensajes.
  "positionClass": "toast-bottom-right", // Posiciona la notificación en la parte inferior derecha.
  "preventDuplicates": false,        // Permite la repetición de mensajes (no evita duplicados).
  "onclick": null,                   // No se ejecuta ninguna acción al hacer clic.
  "showDuration": "300",             // Duración de la animación al mostrar (en milisegundos).
  "hideDuration": "1000",            // Duración de la animación al ocultar (en milisegundos).
  "timeOut": "5000",                 // Tiempo de visualización del mensaje (en milisegundos).
  "extendedTimeOut": "1000",         // Tiempo adicional antes de ocultar si el usuario interactúa con la notificación.
  "showEasing": "swing",             // Tipo de animación para mostrar (efecto de balanceo).
  "hideEasing": "linear",            // Tipo de animación para ocultar (efecto lineal).
  "showMethod": "fadeIn",            // Método de aparición del mensaje (efecto de desvanecimiento).
  "hideMethod": "fadeOut"            // Método de desaparición del mensaje (efecto de desvanecimiento).
}

// Muestra una notificación de error indicando que hubo un fallo en el login.
toastr.error('Error de Login, por favor verifique sus credenciales.');
</script>
<?php } 

//Sesion cerrada correctamente
if(isset($_REQUEST['sc'])){ ?>
	<script type='text/javascript'>
		toastr.success('Felicitaciones, la sesión fue cerrada con éxito.');
	</script>
<?php }

//Error, no existe el correo cuando se intenta loguear
if(isset($_REQUEST['e'])){ ?>
	<script type='text/javascript'>
		toastr.error('Error, no existe el correo, por favor verifique.');
	</script>
<?php } 

//Error no se puede crear dicha cuenta de usuario xq el correo ingresado ya existe.
if(isset($_REQUEST['errorC'])){ ?>
	<script type='text/javascript'>
		toastr.warning('Error, el correo ya existe, por favor verifique.');
	</script>
<?php }
?>
<!--- FIN DE LOS MENSAJES PERSONALIZADOS -->
