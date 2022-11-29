<?php

class Mahasiswa extends Controller {

    public function index() {
        $data['list-mahasiswa'] = $this->model("Mahasiswa_model")->getAllMahasiswa();
        $data['page-title'] = "halaman Mahasiswa";
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['page-title'] = "detail mahasiswa";
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }
}