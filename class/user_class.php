<?php 

    class User_class extends DB_conn {
        // Check username
        public function readUserName($name) {
            $sql = "SELECT * FROM users WHERE u_name = '$name'";
            $query = mysqli_query($this->conn, $sql);
            return $query;
        }

        // Check email
        public function readUserEmail($email) {
            $sql = "SELECT * FROM users WHERE u_email = '$email'";
            $query = mysqli_query($this->conn, $sql);
            return $query;
        }

        // Add user
        public function addUser($name, $email, $pass, $rank) {
            $sql = "INSERT INTO users (u_name, u_email, u_pass, u_rank) VALUES ('$name', '$email', '$pass', '$rank')";
            $query = mysqli_query($this->conn, $sql);
            return $query;
        }
    }