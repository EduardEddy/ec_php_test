<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Connect {

    public function connection(){
        $redis = new Redis();
        $conn = $redis->connect('127.0.0.1', 6379);
        if (!$conn) {
            throw new Exception("No se pudo conectar con la base de datos de Redis :(");
        }
        return $redis;
    }
}