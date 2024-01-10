<?php
class UserModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getUser($username, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE username=? AND password=?");

        if ($stmt) {
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_assoc();
        } else {
            // Manejo de error si la preparación de la consulta falla
            return null;
        }
    }
}
?>

