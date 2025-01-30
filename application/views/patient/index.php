
<body>
<div class="container ">

<?php if ($this->session->flashdata('flash')): ?>
<div class="row mt-3">
    <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Registrasi <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" >
            <span array_hidden="true">&times;</span>
        </button>
    </div>
    </div>
</div>
<?php endif;?>
<div class="container">
    <h2>Daftar Pasien</h2>
    <td></td>
    <div class="row mt-3">
            <div class="col-md-6">
                <a href="<?= base_url('patient/tambah') ?>" class="btn btn-primary" style="margin-bottom: 20px; display: inline-block;">Registrasi Pasien</a>
            </div>
        </div>
    </div>
    <!-- <a href="">Tambah User</a> -->
    <ul class="list-group">
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>No. Rekam Medis</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>NIK</th>
            <th>No. Telepon</th>
            <th>Alamat</th>
            <th>Golongan Darah</th>
            <th>Berat Badan</th>
            <th>Tinggi Badan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($patient as $key => $px): ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $px['record_number'] ?></td>
            <td><?= $px['name'] ?></td>
            <td><?= $px['birth'] ?></td>
            <td><?= $px['nik'] ?></td>
            <td><?= $px['phone'] ?></td>
            <td><?= $px['address'] ?></td>
            <td><?= $px['blood_type'] ?></td>
            <td><?= $px['weight'] ?></td>
            <td><?= $px['height'] ?></td>
            <td>
                <div style="display: flex; gap: 3px; align-items: center;"><a href="<?= base_url('patient/detail/' . $px['id']) ?>" class="btn btn-success">Detail</a> |
                <a href="<?= base_url('patient/edit/' . $px['id']) ?>" class="btn btn-warning">Edit</a> |
                <a href="<?= base_url('patient/hapus/' . $px['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </div>
                </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </ul>
   </div>


