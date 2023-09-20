<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md">
            <a href="<?= base_url('Admin/tambah'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAMA BARANG</th>
                        <th scope="col">MERK</th>
                        <th scope="col">TANGGAL INPUT</th>
                        <th scope="col">TANGGAL UPDATE</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <?php $i = 1 ?>
                <?php foreach ($barang as $p) : ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $p['nama_barang']; ?></td>
                            <td><?= $p['merk']; ?></td>
                            <td><?= $p['tgl_input']; ?></td>
                            <td><?= $p['tgl_update']; ?></td>
                            <td>
                            <a href="<?= base_url(); ?>Admin/edit/<?= $p['id_barang']; ?>"><button type="button" class="btn btn-outline-secondary">Edit</button> </a>
                                <a href="<?= base_url(); ?>Admin/hapus/<?= $p['id_barang']; ?>" onclick="return confirm('Yakin?');" ><button type="button" class="btn btn-outline-danger">Hapus</button></a>
                            </td>
                        </tr>
                    </tbody>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->