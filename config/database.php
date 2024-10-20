<?php
// Clase para gestionar la conexión con la base de datos.
class Database {
    // Definimos las propiedades de la conexión (host, nombre de la BD, usuario, contraseña).
    private $host = 'localhost';
    private $db_name = 'bd_ieela';
    private $username = 'root';
    private $password = '';
    public $conn;

    // Método para obtener la conexión.
    public function getConnection() {
        // Inicializamos la conexión en null.
        $this->conn = null;

        // Intentamos conectarnos a la base de datos usando PDO.
        try {
            // Construimos el DSN (Data Source Name) y establecemos la conexión.
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            // Configuramos el charset a UTF-8 para soportar caracteres especiales.
            $this->conn->exec("set names utf8mb4");
        } catch (PDOException $exception) {
            // Si hay un error en la conexión, lo capturamos y mostramos el mensaje.
            echo "Error de conexión: " . $exception->getMessage();
        }

        // Devolvemos el objeto de la conexión.
        return $this->conn;
    }
}
?>