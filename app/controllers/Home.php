<?php

class Home extends Controller {
 public function index() {
  $data['page-title'] = 'halaman home/index';
  $data['name'] = $this->model("User_model")->getUser();
  $this->view('templates/header', $data);
  $this->view('templates/navbar');
  $this->view('home/index', $data);
  $this->view('templates/footer');
 }

}