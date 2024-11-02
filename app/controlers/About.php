<?php

class About extends Controller{
    public function index($nama = 'Sandhika', $pekerjan = 'Dosen', $umur = 32)
    {
        $data['nama'] = $nama; 
        $data['pekerjaan'] = $pekerjaan; 
        $data['umur'] = $umur; 
        $data['judul'] = 'About me';
        $this->view('tamplates/header' $data);
        $this->view('about/index',$data);
        $this->view('tamplates/footer');
    }
    public function page()
    {
        $data['judul'] ='pages';
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}