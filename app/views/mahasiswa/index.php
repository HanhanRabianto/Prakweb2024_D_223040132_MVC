<div class="container mt-3">


      <div class="row">
        <div class="col-lg-6">
          <?php  Flasher::flash(); ?>
        </div>
      </div>

    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
               Tambah Data Maasiswa
            </button>
            <br><br>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
            <?php foreach($data['mhs'] as $mhs) : ?>
             <li class="list-group-item d-flex justify-content-betweenalign-items-center">
                <?= $mhs['nama']; ?></li>
                <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-danger  float-right ml-2" onclick="return confirm('yakin?')">hapus</a>
                <a href="<?= BASEURL ?>/mahasiswa/ubah/<?= $mhs['id'];?>" class="badge badge-success float-righ ml-2t tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?=$mhs['id'];?></a> >ubah</a>
                <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-primary float-righ ml-2t">detail</a>
             <?php endforeach; ?>
            </ul>
          
             
           
        </div>
    </div>

</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="JudukModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control" id="form-control" name="nrp">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="form_control" name="email">
          </div>
          

          <div class="form-group">
             <label for="jurusan">Jurusan</label>
             <select class="form-control" id="jurusan" name= "jurusan">
             <option value = "Teknik Mesin">Teknik Mesin</option>
             <option value = "Teknik Industri">Teknik Industri</option>
             <option value = "Teknik Pangan">Teknik pangan</option>
             <option value = "Teknik Planologi">Teknik planologi</option>
             <option value = "Teknik Lingkungan">Teknik lingkungan</option>
             <option value = "Teknik Informatika">Teknik Informatika</option>
          </select>
  </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah data</button>
        </form>
      </div>
    </div>
  </div>
</div>