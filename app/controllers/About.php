<?php

class About extends Controller {
    public function index($name = "unknown", $job = "jobless", $age = 0) {
        $data['page-title'] = "Index About";
        $data['name'] = $name;
        $data['job'] = $job;
        $data['age'] = $age;
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page() {
        $data['page-title'] = "About Page";
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}