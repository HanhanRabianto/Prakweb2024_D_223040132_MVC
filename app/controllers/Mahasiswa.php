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

public function detail($id)
{
    $data['judul'] = 'detail mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view('templates/header',$data);
    $this->view('mahasiswa/index',$data);
    $this->view('templates/footer' );
}

   public function tambah()
   {
      
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil','ditambahkan','succsess');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        }else{
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        }
   }


   public function hapus($id)
   {
       if($this->model('Mahasiswa_model')->hapushDataMahasiswa($id) > 0)
        {
           Flasher::setFlash('berhasil','dihapus', 'success');
           header('location:' . BASEURL . '/mahasiswa');
           exit;
       } else {
           Flasher::setFlash('gagal','dihapus', 'danger');
           header('location:' . BASEURL . '/mahasiswa');
           exit;
       }
   }

   public function getubah() {
    echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
   }
     public function ubah() {
       if($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0)
        {
           Flasher::setFlash('berhasil','diubah', 'success');
           header('location:' . BASEURL . '/mahasiswa');
           exit;
    } else {
           Flasher::setFlash('gagal','diubah', 'danger');
           header('location:' . BASEURL . '/mahasiswa');
           exit;
    }
}
}

