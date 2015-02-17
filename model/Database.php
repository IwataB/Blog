<?php

class Database {

    private $connection;
    private $host;
    private $password;
    private $username;
    private $database;
    public $error;
//Construction of a database
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;

        $this->connection = new mysqli($host, $username, $password);

        if ($this->connection->connect_error) {
            die("</p>Error: " . $connection->connect_error) . "</p>";
        }

        $exists = $this->connection->select_db($database);

        if (!$exists) {
            $query = $this->connection->query("CREATE DATABASE $database");

            if ($query) {
                echo "<p>Successfully created database: " . $database . "</p>";
            }
        } else {
            echo "<p>Database already exists.</p>";
        }
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password);

        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }

    public function closeConnection() {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    public function query($string) {
        $this->openConnection();

        $query = $this->connection->query($string);
        
        if(!query){
            $this->error = $this->connection->query($string);
        }

        $this->closeConnection();

        return $query;
    }

}
