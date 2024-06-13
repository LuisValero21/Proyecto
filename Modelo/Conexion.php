<?php
    class Conexion{
        protected $username = "postgres";
        protected $password = "1234";
        protected $mysqlhost = "localhost";
        protected $dbname = "MinerUcab";
        protected $conexion;
        public function __construct(){
            try {
                $this->conexion = new PDO('mysql:host='.$this->mysqlhost.';dbname='.$this->dbname, $this->username, $this->password);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $error) {
                echo 'Fallo la conexion' . $error->getMessage(); /*Muestra el error o falla de conexion*/
            }

        }

        public function ejecutar($sql){ /*permite ejecutar secuencias sql excepto select*/

        try {
            return $this->conexion->exec($sql);
        } catch (Exception $e) {
            //$e = false;
            return $e;
        }
    }

    public function consultar($sql)
    {
        try {
            return $this->conexion->query($sql);
        } catch (Exception $e) {
            return $e;
        }
    }
    }









?>