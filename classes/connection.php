<?php
   class Connection {
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    // if mac, need 'root' for password 
    private $db_name = 'sales-oop';
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name);
        if($this->conn->connect_error){
            die("ERROR: ". $this->conn->connect_error);
        }
    }
   }


?>