<?php
class UserModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function register($username, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $this->db->query($query);
        $this->db->bind(":username", $username);
        $this->db->bind(":password", $hashedPassword);
        return $this->db->execute();
    }

    public function login($username, $password) {
        $query = "SELECT * FROM users WHERE username = :username";
        $this->db->query($query);
        $this->db->bind(":username", $username);
        $row = $this->db->single();

        if ($row) {
            if (password_verify($password, $row['password'])) {
                return $row;
            }
        }
        return false;
    }
}
