<?php

class DatabaseConnection {
    private $db;

    public function __construct() {
        $mysql_config = parse_ini_file("../secrets/mysql.ini", true);

        $this->db = mysqli_connect(
            hostname: $mysql_config["hostname"],
            username: $mysql_config["username"],
            password: $mysql_config["password"],
            database: $mysql_config["dbname"],
        );

        if (!$this->db) {
            die("Connection failed: " . mysqli_connect_error());
        }

    }

    public function getConnection() {
        return $this->db;
    }
}
