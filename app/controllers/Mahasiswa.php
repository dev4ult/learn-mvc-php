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

    public function tambah() {
        if ($this->model('Mahasiswa_model')->addNewMahasiswa($_POST) > 0) {
            header('Location:' . BASEURL . '/mahasiswa');
            Flasher::setFlash('Succesfully inserted a row', 'Close', 'success');
            exit;
        } else {
            Flasher::setFlash('Failed to insert a row', 'Close', 'error');
        }
    }

    public function delete($id = -1) {
        if ($id >= 0) {
            if ($this->model('Mahasiswa_model')->deleteMahasiswaById($id) > 0) {
                Flasher::setFlash('Succesfully deleted a row', 'Close', 'success');
            } else {
                Flasher::setFlash('Failed to delete a row', 'Close', 'error');
            }
        }
        header('location: ' . BASEURL . '/mahasiswa');
        exit;
    }
}