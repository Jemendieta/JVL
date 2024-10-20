<?php
require_once 'includes/header.php'; // Asegúrate de que la ruta sea correcta

    // Verifica si la sesión existe
    if (!isset($_SESSION['nombreUser'])) {
        header("Location: index.php"); // Redirige a la página de login si no hay sesión
        exit;
    }

?>

<!--Parte de centro de dashboard-->
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-speedometer"></i> Sistema de Registro</h1>
            <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Create a beautiful dashboard</div>
                
            </div>
        </div>
    </div>
</main>

<?php
require_once 'includes/footer.php'; // Asegúrate de que la ruta sea correcta
?>