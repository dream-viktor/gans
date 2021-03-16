<?php

class Database {

    // укажите свои собственные учетные данные для базы данных 
    private $host = "91.227.16.12";
    private $db_name = "h156061_test";
    private $username = "h156061_root";
    private $password = "h156061_isaenko";
    public $conn;

    // получение соединения с базой данных 
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch(PDOException $exception) {
            echo "Ошибка соединения: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
