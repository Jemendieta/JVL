<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Iniciar sesión para gestionar la sesión del usuario
session_start();


// Incluir la configuración de la base de datos
require_once 'config/database.php';
require_once 'controllers/LoginController.php';
//require_once 'controllers/SearchController.php';

// Crear una instancia de la clase de base de datos
$database = new Database();
$db = $database->getConnection(); // Obtener la conexión

$action = isset($_GET['action']) ? $_GET['action'] : '';

$controller = new LoginController($db); // Pasar la conexión al controlador

switch ($action) {
    case 'login':
        $controller->login(); // Llamar a la función login
        break;
    case 'dashboard':
        require 'views/dashboard.php'; // Cargar la vista del dashboard
        break;
    default:
        // Mostrar la página de login por defecto
        require 'views/login.php'; // Vista para el inicio de sesión
        break;
}
?>
