<?php
class Conexion {
    private $host = 'localhost';
    private $usuario = 'root';
    private $contrasena = '';
    private $base_datos = 'censos';

    protected function conectar() {
        $dsn = "mysql:host={$this->host};dbname={$this->base_datos}";
        $conexion = new PDO($dsn, $this->usuario, $this->contrasena);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    }
}
