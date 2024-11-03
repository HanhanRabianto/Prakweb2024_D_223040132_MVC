<?php

class Mahasiswa {
    public function index()
        {
            $data['judul'] = 'daftar Mahasiswa';
            $data['mhs'] = $this->model('Mahasiswa_model')->getALLMahasiswa();
            $this->view('templates/header',$data);
            $this->view('mahasiswa/index',$data);
            $this->view('templates/footer' );
        }
}
public function detail($id)
{
    $data['judul'] = 'detail mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view('templates/header',$data);
    $this->view('mahasiswa/index',$data);
    $this->view('templates/footer' );
}

