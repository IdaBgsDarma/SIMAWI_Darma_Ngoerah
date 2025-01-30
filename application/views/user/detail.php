<div class="container">
    <div class="row mt-3">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
                Detail User
            </div>

            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <h5 class="card-title form-control"><?= $user['name'];?></h5>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <h5 class="card-title form-control"><?= $user['email'];?></h5>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <h5 class="card-title form-control"><?= $user['password'];?></h5>
                    </div>
                    <a href="<?= base_url('user');?>" class="btn btn-primary">Kembali</a>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>