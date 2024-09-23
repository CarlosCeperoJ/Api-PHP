<?php

Class Conectar{

    protected $dbh;

    protected function Conexion(){

        try {
            // Corrección en la cadena de conexión
            $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=php-api", "root", "1113702223", 
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            
            return $conectar;

        } catch (\Exception $e) {
            print "!error DB: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_name(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}
?>