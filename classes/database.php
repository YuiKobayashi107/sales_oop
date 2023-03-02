<?php
    class Database {
        private $server_name="localhost";
        private $usernameprivate="root"; 
        private $passwordprivate="root";
        private $db_name="sales_oop";
        protected $conn;

        public function __construct(){
            $this->conn = new mysqli($this->server_name, $this->usernameprivate, $this->passwordprivate, $this->db_name);
            if($this->conn->connect_error){
                die("Unable to connect to datebase" . $this->db_name . ": " .$this->conn->connect_error);
            }
        }
    }
?>