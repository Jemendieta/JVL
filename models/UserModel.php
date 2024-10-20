<?php
class UserModel {
    private $conn; // Conexión a la base de datos

    public function __construct($dbConnection) {
        $this->conn = $dbConnection; // Asigna la conexión a la propiedad
    }

    public function login($username, $password) {
        // Consulta para verificar si el usuario existe
        $query = "SELECT * FROM usuario WHERE nombreUser = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
    
        var_dump($stmt->rowCount()); // Añade esto para verificar cuántos usuarios encontró

        // Verifica si se encontró el usuario
        if ($stmt->rowCount() > 0) {
            var_dump($username); // Muestra la fila que encontró para verificar si la consulta está funcionando bien
            $username = $stmt->fetch(PDO::FETCH_ASSOC);
            // Verifica la contraseña usando password_verify()
            if ($password == $username['password']) {
                return true;
            }else{
                var_dump("Contraseña incorrecta");
                return false;
            }
        }
        return false;
    }   
    
}
?>
