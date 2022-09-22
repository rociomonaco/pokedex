<?php
class Database {
    private $conexion;

    public function __construct() {
        $config = parse_ini_file("config.ini");
        $this->conexion = new mysqli(
            $config['host'],
            $config['user'],
            $config['pass'],
            $config['db']);
    }

    public function __destruct() {
        $this->conexion->close();
    }

    public function query($sql) {
        $respuesta = $this->conexion->query($sql);
        return $respuesta->fetch_all(MYSQLI_ASSOC);
    }   
    
    public function queryassoc($sql) {
        $respuesta = $this->conexion->query($sql);
        return $respuesta->fetch_assoc();
    }

    public function execute($sql) {
        $this->conexion->query($sql);
    }

}