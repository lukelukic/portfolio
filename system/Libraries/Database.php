<?php

namespace portfolio\system\Libraries;

/*
    Klasa za pristup bazi.
    Javne metode :
    getInstance() - vraca instancu baze
    executeQuery($query), ocekuje upit, vraca rezultat izvrsenja upita, ukoliko dodje do njih, baca izuzetke
*/

class Database
{
    private $host = "localhost";
    private $database = "oop";
    private $user = "root";
    private $password = "root";
    private static $instance;
    private $conn = null;
    private $result = null;

    public function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function executeQuery($query)
    {
        try {
            $this->connect();
            if (!$result = mysqli_query($this->conn, $query)) {
                echo mysqli_error($this->conn);
            }
            $this->close();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
    }

    private function connect()
    {
        try {
            $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        } catch (Exception $e) {
            echo $e->message;
        }
    }

    private function close()
    {
        if ($this->conn) {
            mysqli_close($this->conn);
        }
    }
}
