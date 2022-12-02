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

        // get all row
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");

        // binding data into query string/statement
        $this->db->bind('id', $id);

        // get single row
        return $this->db->single();
    }

    public function addNewMahasiswa($data) {
        $this->db->query("INSERT INTO mahasiswa VALUES ('', :nama, :nim, :email, :jurusan, '')");

        // binding data into query string/statement
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);

        // executing the statement
        $this->db->execute();
        return $this->db->rowChangeCheck();
    }

    public function deleteMahasiswaById($id) {
        $this->db->query("DELETE FROM mahasiswa WHERE id=:id");

        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowChangeCheck();
    }

    public function editMahasiswaById($data, $id) {
        $this->db->query("UPDATE mahasiswa SET nama=:nama, email=:email, jurusan=:jurusan, nim=:nim WHERE id=:id");

        // binding data into query string/statement
        $this->db->bind('id', $id);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);

        // executing the statement
        $this->db->execute();
        return $this->db->rowChangeCheck();
    }

    public function getAllMahasiswaByKeyword() {
        $keyword = $_POST['keyword'];
        $keyword = "%$keyword%";
        $this->db->query("SELECT * FROM mahasiswa WHERE nama LIKE :keyword");
        $this->db->bind('keyword', $keyword);

        return $this->db->resultSet();
    }

    public function dataIsExistById($id) {
        $this->db->query("SELECT * FROM mahasiswa WHERE id=:id LIMIT 1");
        $this->db->bind('id', $id);

        return $this->db->single();
    }
}