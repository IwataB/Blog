<?php
    class Database {
        private $connection;
        private $host;
        private $password;
        private $username;
        private $database;
        
        public function __construct($host, $username, $password, $database) {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->connection = $connection;
        }
        
        public function openConnection() {
            $this->connection = new mysqli($this->host, $this->username, $this->password);
            
            if ($this->connection->connect_error) {
                die("<p>Error: " . $this->connection->connect_error . "</p>");
            }
        }
        public function closeConnection() {
            if(isset($this->connection)){
                $this->connection->close();
            }
        }
        public function query() {
            
        }
        
    }