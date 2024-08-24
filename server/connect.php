<?php session_start();

    define("DB_host", "localhost");
    define("DB_user", "root");
    define("DB_pass", "");
    define("DB_name", "music_shop");

class DB_conn {
    protected $conn;

    function __construct() {
        $conn = mysqli_connect(DB_host, DB_user, DB_pass, DB_name);
        $this->conn = $conn;
        if (!$conn) {
            echo "Error : " . mysqli_connect_error();
        }
    }
}

$conn = new DB_conn();