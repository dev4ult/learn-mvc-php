<?php

class Mahasiswa_model {
 private $list_mahasiswa = [
  [
   "id" => 1,
   "nim" => 2107411025,
   "kelas" => "TI-3A",
   "nama" => "M. Haikal Al Rasyid",
   "email" => "haikalAnjay@gmail.com",
   "jurusan" => "Teknik Informatika dan Komputer",
  ],
  [
   "id" => 2,
   "nim" => 2107411026,
   "kelas" => "TI-3A",
   "nama" => "Nibras Alyassar",
   "email" => "nibrasAnjay@gmail.com",
   "jurusan" => "Teknik Informatika dan Komputer",
  ],
  [
   "id" => 3,
   "nim" => 2107411027,
   "kelas" => "TI-3A",
   "nama" => "Heical Chandra",
   "email" => "heicalAnjay@gmail.com",
   "jurusan" => "Teknik Informatika dan Komputer",
  ],
  [
   "id" => 4,
   "nim" => 2107411028,
   "kelas" => "TI-3A",
   "nama" => "Gerry Satria Halim",
   "email" => "gerryAnjay@gmail.com",
   "jurusan" => "Teknik Informatika dan Komputer",
  ],
 ];

 private $selected_mahasiswa = [
  "id" => -1,
  "nim" => 0,
  "kelas" => "Unknown",
  "nama" => "Unknown",
  "email" => "Unknown",
  "jurusan" => "Unknown",
 ];

 public function getAllMahasiswa() {
  return $this->list_mahasiswa;
 }

 public function getMahasiswa($id) {
  foreach ($this->list_mahasiswa as $mhs) {
   if ($mhs['id'] == $id) {
    $this->selected_mahasiswa = $mhs;
   }
  }
  return $this->selected_mahasiswa;
 }
}