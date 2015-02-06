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
            
        }
        public function closeConnection() {
            
        }
        public function query() {
            
        }
        
    }