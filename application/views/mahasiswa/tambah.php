<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Form Tambah Data Mahasiswa
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
              <small class="form-text text-danger"> <?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
              <label for="npm">NPM</label>
              <input type="text" class="form-control" id="npm" name="npm">
              <small class="form-text text-danger"> <?= form_error('npm'); ?></small>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email">
              <small class="form-text text-danger"> <?= form_error('email'); ?></small>
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <select class="form-control" id="jurusan" name="jurusan">
                <option> -- Pilih Jurusan -- </option>
                <option value="Teknik Infomatika"> Teknik Informatika</option>
                <option value="Teknik Sipil"> Teknik Sipil</option>
                <option value="Teknik Industri"> Teknik Industri</option>
              </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary btn-sm float-right">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>