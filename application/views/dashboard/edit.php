<div class="container">


  <div class="row mt-3">
    <div class="col md-6 ">

      <div class="card">
        <div class="card-header">
          Form edit Data Siswa
        </div>
        <div class="card-body">
          <form action="" method="post">
            <input type="hidden" name="id_barang" value="<?= $benda['id_barang']; ?>">
            <div class="form-group">
              <label for="nama_barang">Nama Barang</label>
              <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $benda['nama_barang']; ?>">
              <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
            </div>
            <div class="form-group">
              <label for="merk">Merk</label>
              <input type="text" class="form-control" id="merk" value="<?= $benda['merk']; ?>" name="merk">
              <small class="form-text text-danger"><?= form_error('merk'); ?></small>
            </div>
            <div class="form-group">
              <label for="tgl_input">Tanggl Input</label>
              <input type="date" class="form-control" id="tgl_input" value="<?= $benda['tgl_input']; ?>" name="tgl_input">
              <small class="form-text text-danger"><?= form_error('tgl_iput'); ?></small>
            </div>
            <div class="form-group">
              <label for="tgl_update">Tanggl Update</label>
              <input type="date" class="form-control" id="tgl_update" value="<?= $benda['tgl_update']; ?>" name="tgl_update">
              <small class="form-text text-danger"><?= form_error('tgl_update'); ?></small>
            </div>
            <button type="submit" name="edit" class="btn btn-primary float-right"> Edit Data</button>
          </form>

        </div>
      </div>
    </div>

  </div>
</div>
</div>