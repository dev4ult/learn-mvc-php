<?php

class Mahasiswa_model {
    private $db;
    private $table;

    public function __construct() {
        $this->table = 'mahasiswa';
        $this->db = new Database();
    }

    public function getAllMahasiswa() {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}