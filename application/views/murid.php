<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">

    <title>Data Murid</title>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Panduan Code</span>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-7">
                <h3>Data Murid Didi School</h3>
                <div class="card">
                    <div class="card-header">
                        Pilih Data Murid
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <select class="form-control" name="nama" id="nama">
                                    <option value=''>----PILIH----</option>
                                    <?php
                                    foreach ($murid as $m) : ?>
                                        <option value=<?= $m['nisn']; ?>><?= $m['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" class="form-control" id="nisn" name="nisn">
                                <?= form_error('nisn', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                        </form>
                    </div>
                </div>
                <?= $this->session->flashdata('success'); ?>
                <a href="<?= base_url('murid/tambah/'); ?>" class="btn btn-dark mb-2">Tambah Data</a>
                <div class="table-responsive table-striped">
                    <table class="table">
                        <thead>
                            <?php $no = 1; ?>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NISN</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($murid as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $m['nama']; ?></td>
                                    <td><?= $m['nisn']; ?></td>
                                    <td><?= $m['kelas']; ?></td>
                                    <td><?= $m['alamat']; ?></td>
                                    <td><a href="<?= base_url('murid/hapus/'); ?><?= $m['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah kamu ingin menghapus data ini?');">Hapus</a>
                                    </td>
                                    <td><a href="<?= base_url('murid/ubah/'); ?><?= $m['id']; ?>" class="badge badge-warning">Ubah</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        window.onload=function() {
          let filter = document.getElementById('nama');
          filter.onchange=function() {
            $("#nisn").val(filter.value);
          } 
        }
    </script>
</body>

</html>