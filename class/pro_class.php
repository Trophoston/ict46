<?php

class Pro_class extends DB_conn {
    // Add product
    public function addPro($pname, $pbrand, $pversion, $pcolor, $pprice, $pquan, $pimgname) {
        $sql = "INSERT INTO products (p_name, p_brand, p_version, p_color, p_price, p_quan, p_img) VALUES ('$pname', '$pbrand', '$pversion', '$pcolor', '$pprice', '$pquan', '$pimgname')";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }

    // Read product
    public function readPro() {
        $sql = "SELECT * FROM products";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }

    // Read product by id
    public function readProById($id) {
        $sql = "SELECT * FROM products WHERE p_id = '$id'";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }

    // Update product
    public function updatePro($id, $pname, $pbrand, $pversion, $pcolor, $pprice, $pquan, $pimgname) {
        $sql = "UPDATE products SET p_name = '$pname', p_brand = '$pbrand', p_version = '$pversion', p_color = '$pcolor', p_price = '$pprice', p_quan = '$pquan', p_img = '$pimgname' WHERE p_id = '$id'";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }

    // Delete product
    public function deletePro($id) {
        $sql = "DELETE FROM products WHERE p_id = '$id'";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }

    // Buy product
    public function buyPro($huemail,$huname,$hpid) {
        $sql = "INSERT INTO historys (h_uemail, h_uname ,h_pid) VALUES ('$huemail', '$huname', '$hpid')";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }
}