
<body>
<div class="container ">

<?php if ($this->session->flashdata('flash')): ?>
<div class="row mt-3">
    <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data User <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" >
            <span array_hidden="true">&times;</span>
        </button>
    </div>
    </div>
</div>
<?php endif;?>
   
</div>
   <div class="container">
   <h1>Daftar User</h1>
    <!-- <a href="">Tambah User</a> -->
    <ul class="list-group">
    <!-- <div class="card"> -->
    <!-- <div class="card-body"> -->
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Password</th>
            <th>Nama</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($user as $key => $p): ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $p['email'] ?></td>
            <td><?= $p['password'] ?></td>
            <td><?= $p['name'] ?></td>
            <td><?= $p['role'] ?></td>
            <td>
                <a href="<?= base_url('user/detail/' . $p['id']) ?>" class="btn btn-success">Detail</a> |
                <a href="<?= base_url('user/edit/' . $p['id']) ?>" class="btn btn-warning">Edit</a> |
                <a href="<?= base_url('user/hapus/' . $p['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('user/tambah') ?>" class="btn btn-primary">Tambah Pengguna</a>
        </div>
    </div>
        </div>
        </div>

    </ul>
   </div>


