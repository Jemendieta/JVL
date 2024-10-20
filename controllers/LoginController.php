<?php
// Incluir el modelo de usuario
require_once 'models/UserModel.php';
// Incluir el archivo de configuración de la base de datos
require_once 'config/database.php';

class LoginController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['nombreUser'];
            $password = $_POST['password'];

            if ($this->validateUser($username, $password)) {
                $_SESSION['nombreUser'] = $username;
                header("Location: index.php?action=dashboard"); // Redirigir al dashboard
                exit;
            }else{
                var_dump("Error: Usuario o contraseña incorrectos");// Esto te mostrará si la validación falla
                exit();// Para detener el flujo aquí temporalmente
            }
        }

        require 'views/login.php'; // Cargar vista de inicio de sesión
    }

    private function validateUser($username, $password) {
    // Instancia el modelo de usuario
    $userModel = new UserModel($this->db);
    // Llama al método de login para verificar el nombre de usuario y la contraseña
    return $userModel->login($username, $password);
    }

}

?>
