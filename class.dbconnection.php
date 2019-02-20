<?php
    class database{
        protected $conn;
        protected $server   =   "localhost";
        protected $username =   "root";
        protected $password =   "";
        protected $dbname   =   "test";

        public function __construct(){
            try{
                $this->conn =   new PDO("mysql:host=$this->server; dbname=$this->dbname", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(Exception $e){
                echo "Error: ". $e->getMessage();                
            }
        }
    }
    $obj=   new database;
?>