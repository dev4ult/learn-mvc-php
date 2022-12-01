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

    public function addNewMahasiswa($data) {
        $this->db->query("INSERT INTO mahasiswa VALUES ('', :nama, :nim, :email, :jurusan, '')");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowChangeCheck();
    }

    public function deleteMahasiswaById($id) {
        $this->db->query("DELETE FROM mahasiswa WHERE id=:id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowChangeCheck();
    }
}