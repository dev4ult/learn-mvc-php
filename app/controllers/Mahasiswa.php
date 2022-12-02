<?php

class Mahasiswa extends Controller {

    public function index() {
        $data['page-title'] = "halaman Mahasiswa";
        $data['list-mahasiswa'] = $this->model("Mahasiswa_model")->getAllMahasiswa();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['page-title'] = "detail mahasiswa";
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);

        if ($this->model('Mahasiswa_model')->dataIsExistById($id)) {
            $this->view('templates/header', $data);
            $this->view('templates/navbar');
            $this->view('mahasiswa/detail', $data);
            $this->view('templates/footer');
        } else {
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function tambah() {
        header('Location:' . BASEURL . '/mahasiswa');
        if ($this->model('Mahasiswa_model')->addNewMahasiswa($_POST) > 0) {
            Flasher::setFlash('Succesfully inserted a row', 'success');
        } else {
            Flasher::setFlash('Failed to insert a row', 'error');
        }
        exit;
    }

    public function delete($id = -1) {
        header('location: ' . BASEURL . '/mahasiswa');
        if ($this->model('Mahasiswa_model')->dataIsExistById($id)) {
            if ($this->model('Mahasiswa_model')->deleteMahasiswaById($id) > 0) {
                Flasher::setFlash('Succesfully deleted a row', 'success');
            } else {
                Flasher::setFlash('Failed to delete a row', 'error');
            }
        }
        exit;
    }

    public function ubah($id = -1) {
        if ($this->model('Mahasiswa_model')->dataIsExistById($id)) {
            header('location: ' . BASEURL . '/mahasiswa/detail/' . $id);
            if ($this->model('Mahasiswa_model')->editMahasiswaById($_POST, $id) > 0) {
                Flasher::setFlash('Succesfully edited this data', 'success');
            } else {
                Flasher::setFlash('Failed to edit this data', 'error');
            }
        } else {
            header('location: ' . BASEURL . '/mahasiswa');
        }
        exit;
    }

    public function cari() {
        $data['page-title'] = "halaman Mahasiswa";

        if (isset($_POST['keyword'])) {
            $data['list-mahasiswa'] = $this->model("Mahasiswa_model")->getAllMahasiswaByKeyword();
            // Flasher::setFlash('Keyword : ' . $_POST['keyword'], 'success');
            $this->view('templates/header', $data);
            $this->view('templates/navbar');
            $this->view('mahasiswa/index', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}