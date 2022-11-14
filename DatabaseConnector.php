<?php
namespace DBConnector;

class DatabaseConnector {

    private $dbConnection = null;

    public function __construct()
    {
        $host = "localhost";
        $port = "3306";
        $db   = "turk_db";
        $user = "root";
        $pass = "";

       
            $dbConnection = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($dbConnection->connect_error){
                die("Error failed to connect to MySQL: " . $dbConnection->connect_error);
            } else {
                return $dbConnection;
            }
       
    }

    public function getConnection()
    {
        return $this->dbConnection;
    }
}
?>